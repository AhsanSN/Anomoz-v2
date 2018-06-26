<?
//testing
/**
include_once("../global.php");
$new_message = "my name is ahsan";
$receiver = "391400626197344";
$contact_name = "Poppy";
**/

//adding to their wall
if($new_message!= '')
{
$sql_person="INSERT INTO Messages(id, message, time, me) VALUES ('$receiver', '$new_message' , now(),'1')";
    if(!mysqli_query($con,$sql_person))
    {
    //echo"can not 1";
    }

//updating message numbers    
$sql_190="UPDATE nMessages SET public_messages = public_messages+1, last_message= '$new_message' WHERE usernumber = '$receiver';";
        if(!mysqli_query($con,$sql_190))
        {
        //echo"can not 2";
        }
        
$start_chat = "SELECT * FROM Private_chats WHERE started_by = '$session_usernumber' AND message_for = '$receiver' ";
    $start_chat_result = $con->query($start_chat);
    
    if ($start_chat_result->num_rows == 0) 
    {
        $name = $_SESSION['username_'.$stamp];
        $sql_new_chat="INSERT INTO Private_chats(started_by, message_for, name_by, name_for,pic) VALUES ('$session_usernumber', '$receiver', '$session_username', '$name','$receiver_pic' )";
         $sql_new_chat_result = $con->query($sql_new_chat);
        if(!mysqli_query($con,$sql_new_chat_result))
        {
             //echo "can not 3";
        }
    }        

$stored_message = $contact_name.": ".$new_message;
$start_chat_notf = "SELECT * FROM Private_chats WHERE message_for = '$receiver' ";
    $start_chat_result_notf = $con->query($start_chat_notf);
    while($row_user= $start_chat_result_notf->fetch_assoc())
    {
         $temp_user = $row_user['started_by'];
        //add to notification table
        $sql_new_chat="INSERT INTO Notifications(usernumber, group_name, message) VALUES ('$temp_user','$contact_name','$stored_message' )";
         $sql_new_chat_result = $con->query($sql_new_chat);
        if(!mysqli_query($con,$sql_new_chat_result))
        {
             ////echo "can not 4";
        }
}

//preparing notf
$tokens=array();
$tokens_usernumber=array();
$tokens_title=array();
$tokens_body=array();
$tokens_n_messages=array();
$tokens_n_chats=array();
$tokens_url=array();
$temp_usernumbers=array();

echo "nam" .$contact_name. "<br>";

$start_chat_notf = "SELECT usernumber FROM Notifications Where group_name='$contact_name'";
    $start_chat_result_notf = $con->query($start_chat_notf);
    while($row_user= $start_chat_result_notf->fetch_assoc())
    {
        if (!in_array($row_user['usernumber'],$temp_usernumbers)){array_push($temp_usernumbers,$row_user['usernumber']);}
    }

for ($x = 0; $x < count($temp_usernumbers); $x++) {
   echo "usernumber".$temp_usernumbers[$x]."<br>";
}

for ($x = 0; $x < count($temp_usernumbers); $x++) {
    $n_messages_person = 0;
    $message_body_person = '';
    $temp_chats = array();
    $start_chat_notf = "SELECT * FROM Notifications WHERE usernumber = '$temp_usernumbers[$x]' ORDER BY no DESC ";
    $start_chat_result_notf = $con->query($start_chat_notf);
    while($row_user= $start_chat_result_notf->fetch_assoc())
    {
        $n_messages_person = $n_messages_person + 1;
        if (!in_array($row_user['group_name'],$temp_chats)){array_push($temp_chats,$row_user['group_name']);}
        $temp_url = $row_user['group_name'];
        $message_body_person = $message_body_person . $row_user['message']. "\n";
    }
    array_push($tokens_n_messages,$n_messages_person);
    array_push($tokens_n_chats,count($temp_chats));
    //changing keywords
    $msg_keyword = '';
    $chat_keyword = '';
    if ($n_messages_person==1){$msg_keyword="message";}else{$msg_keyword="messages";}
    if (count($temp_chats)==1){$chat_keyword="chat";array_push($tokens_url,"https://www.anomoz.com/$temp_url?c=cn");
    }else{$chat_keyword="chats";array_push($tokens_url,"https://www.anomoz.com/?c=cn");
    }
    $title = "You have ".$n_messages_person." new ".$msg_keyword." from ".count($temp_chats)." ".$chat_keyword.".";
    array_push($tokens_title,$title);
    //checking body length
    if (strlen($message_body_person)>100){$message_body_person = substr($message_body_person, 0,100);}
    array_push($tokens_body,$message_body_person);

}

for ($x = 0; $x < count($tokens_title); $x++) {
$temp_tokens = array();
$start_chat_notf = "SELECT token FROM Token WHERE usernumber = '$temp_usernumbers[$x]' ORDER BY no DESC ";
    $start_chat_result_notf = $con->query($start_chat_notf);
    if ($start_chat_result_notf->num_rows > 0) {
    while($row_user= $start_chat_result_notf->fetch_assoc())
    {
        array_push($temp_tokens,$row_user['token']);
    }
    }
    else{
        array_push($temp_tokens,"__none__");
    }
    array_push($tokens,$temp_tokens);
}
// Server key from Firebase Console
define( 'API_ACCESS_KEY', 'AAAAlHKlaCE:APA91bE3XSg6m0RuQLuUkscaUGIWkHXX6bnJKq2BOnhIl86HBKrPICJCY6I9wv1iCtO9yPF2m4gV0tnfhfA2fKJsQaESH2F1no1E3CxL6ndqrsNb9_ZYHx_ghkzQ-NdJXkojLf9Ap9mu' );
for ($x = 0; $x < count($tokens); $x++) {
    if ($tokens[$x][0] != "__none__"){
$registrationIds = $tokens[$x];
// prep the bundle
$notf = array ("priority" => "normal",
                "collapseKey" => "demo",
                  "title" => $tokens_title[$x],
                    "body" => $tokens_body[$x],
                    "icon" => "../profiles/p1.jpg",
                    "tag" => "message",
                    "click_action" => $tokens_url[$x]
                    );
$data = array("sender" => "$session_usernumber");
$fields = array
(
	'registration_ids' 	=> $registrationIds,
	'data' 	=> $data,
	'notification'=> $notf
);
$headers = array
(
	'Authorization: key=' . API_ACCESS_KEY,
	'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;

}
}
}

?>
