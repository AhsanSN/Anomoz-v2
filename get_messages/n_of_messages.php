<?
if ($_SESSION['currentview_'.$stamp] == "home"){$search_usernumber = $session_usernumber;}
else if ($_SESSION['currentview_'.$stamp] == "person"){$search_usernumber = $_SESSION['receiver_'.$stamp];}

$sql="SELECT * FROM nMessages Where usernumber='$search_usernumber'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row= $result->fetch_assoc())
    {
        $current_messages_n = $row['public_messages'];
    }
}
?>