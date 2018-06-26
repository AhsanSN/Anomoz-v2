n<?include_once("global.php");
?>
<?if ($logged==1){ ?> <script type="text/javascript"> window.location = "/";
document.cookie = "redirect_ajax=hss; path=/;";
</script> <?}if(isset($_POST["email"])){ $email = $_POST["email"]; $password = $_POST["password"];if((!$email)||(!$password)){ $message = "Please insert both fields.";} else{ $query = "SELECT * FROM Users WHERE email = '$email' OR username = '$email' AND password='$password' "; $result = $con->query($query); if ($result->num_rows > 0){ while($row = $result->fetch_assoc()) { $username = $row['username']; $usernumber = $row['usernumber']; $email = $row['email']; $school = $row['school']; $description = $row['description']; $delete = $row['delete']; $pic = $row['pic']; } $_SESSION['username'] = $username; $_SESSION['password'] = $password; $_SESSION['usernumber'] = $usernumber; $_SESSION['email'] = $email; $_SESSION['school'] = $school; $_SESSION['description'] = $description; $_SESSION['delete'] = $delete; $_SESSION['pic'] = $pic; ?> <script type="text/javascript"> window.location = " "; </script> <? header("Refresh:0");} else { } }} ?>
<?
if (!isset($_POST['s'])){$stamp = (mt_rand(910,91084));}
if (isset($_POST['s'])){$stamp = $_POST['s'];}  
if (isset($_SESSION['group']))
{
    $_SESSION['currentview_'.$stamp] = "group";
    unset($_SESSION['group']);
}
if (isset($_SESSION['name']))
{
    if ($_SESSION['name'] == "not_found")
    {
        include_once("popup/error_popup.php");
         $_SESSION['currentview_'.$stamp] = "home";
         unset($_SESSION['name']);
    }
}
if ((isset($_SESSION['name']))&&(!isset($_POST['s'])))
{
    //recongnizing person
    $username = $_SESSION['name'];
    $message_query="SELECT * FROM Users WHERE username = '$username'";
    //ORDER BY username
    $result = $con->query($message_query);
    if ($result->num_rows > 0) {
    while($row= $result->fetch_assoc())
    {
        $_POST['username'] = $row['username'];
        $_SESSION['username_'.$stamp] = $row['username'];
        $_POST['pic'] = $row['pic'];
        $_POST['school'] = $row['school'];
        $_POST['description'] = $row['description'];
        $_SESSION['receiver_'.$stamp] = $row['usernumber'];
        $_SESSION['currentview_'.$stamp] = "person";
        include_once("get_messages/n_of_messages.php");
    }
    }
    else{
        $message_query = "SELECT * FROM Groups WHERE URL = '$username'";
        $result        = $con->query($message_query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_POST['username'] = $row['group_name'];
                $_POST['pic'] = $row['pic'];
                $_SESSION['username_group_'.$stamp] = $row['group_name'];
                $_SESSION['url_'.$stamp] = $row['url'];
                $_POST['website'] = $row['website'];
                $_SESSION['receiver_'.$stamp] = $row['group_number'];
                $_SESSION['receiver_group_'.$stamp] = $row['group_number'];
                ?>
                <script>console.log("rec <?echo $_SESSION['receiver_'.$stamp]?>")</script>
                <?
                $_SESSION['currentview_'.$stamp] = "group";
            }
        }
        }
    }
if(isset($_POST["new_message"]))
{
    $new_message = $_POST["new_message"];
    $new_message = htmlspecialchars($new_message);
    $receiver = $_SESSION['receiver_'.$stamp];
    $receiver_group = $_SESSION['receiver_group_'.$stamp];
    $receiver_pic = $_SESSION['receiver_pic_'.$stamp];
    $contact_name = $_SESSION['username_'.$stamp];
    $contact_name_group = $_SESSION['username_group_'.$stamp];
    if ($_SESSION['currentview_'.$stamp] =="home")
	{
		include_once("add_messages/my_public.php");
	}
	else if ($_SESSION['currentview_'.$stamp]=="person")
	{
	    include_once("add_messages/their_public.php");	
	}
	else if ($_SESSION['currentview_'.$stamp]=="group")
	{
	    include_once("add_messages/group.php");	
	}
}
if (!isset($_SESSION['currentview_'.$stamp])&&(($_SESSION['currentview_'.$stamp]!="create_group")||($_SESSION['currentview_'.$stamp]!="find_people")||($_SESSION['currentview_'.$stamp]!="settings")))
{
    $_SESSION['currentview_'.$stamp] ="home";
}

?>
<script src='js/jquery-2.2.4.min.js'></script>
<script src="js/jquery-1.9.1.js"></script>
<!DOCTYPE html><html class=''>
<head>
    <meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
        <title><?if ($_SESSION['currentview_'.$stamp] == "person"){echo $_POST['username'];}if ($_SESSION['currentview_'.$stamp] == "group"){echo $_POST['username'];}?> - Anomoz</title>
        <script>function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
document.cookie = "redirect_ajax=none; path=/;";
</script>
<?include_once("css/messenger_css.php");?>
</head><body>
<div id="frame">
	    <div class="content">
	       		<div class="contact-profile">
			<img src="<?echo $_POST['pic'];?>" alt="" />
			<p>
			    <p><?if ($_SESSION['currentview_'.$stamp] == "group"){echo $_POST['username'];}if ($_SESSION['currentview_'.$stamp] == "person"){if (isset($_POST['username'])){echo $_POST['username'];}}?><a href="#" style="text-decoration:none;" ><span id="demo" onclick="<?if ( $_SESSION['currentview_'.$stamp] == "home"){echo "about_my_public()";};
			    if ($_SESSION['currentview_'.$stamp] == "home"){echo "about_their_public()";};?>" style="color:#32465a; position: absolute;
    right: 6px; top:7px"><i class="material-icons" style="font-size:36px">info_outline</i>
</span></a></p></p>

		</div> 

<div id="my_messages" class="messages">
<ul> 
<?if ($_SESSION['currentview_'.$stamp] == "group"){include_once("get_messages/group.php");}if ($_SESSION['currentview_'.$stamp] == "person"){$id_public= $_POST['usernumber'];include_once("get_messages/their_public.php");};?>
</ul>
</div>
<?$current_messages_n = 10;$new_messages_n = 11;?>
<div class="item"></div>
<script>
$(".item").each(function() {
    $this = $(this);
var dataString = {s: "<?echo $_SESSION['currentview_'.$stamp]?>", r:"<?echo $search_usernumber?>", st: "<?echo $stamp?>"};
$.ajaxSetup({cache:false});
function timeLeft() {
$.ajax({
  type: "POST",
  url: "get_content_messenger.php",
  dataType: "html",
  data: dataString, 
  success: function(result) {
    if (getCookie("redirect_ajax") == "none"){
    $this.html(result);
    timeLeft();
    window.setInterval(function() {
    }, 5);}
    else{
        //getCookie("redirect_ajax")
        window.location.replace = "https://anomoz.com";
        window.location.href = "https://anomoz.com";
    }
  }
});
}
timeLeft();
});
</script>
		<form method="get" class="message-input">
			<div class="wrap">
			<input name="new_message" type="text" id="comment" placeholder="Write your message..." />
			<input name="s" type="text" id="comment" value="<?echo $stamp?>" hidden />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</form>
	</div>
	<script>
	$(function () {
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            enctype: 'multipart/form-data',
            url: 'messenger.php',
            data: $('form').serialize(),
            success: function () {
                //$('#comment').val('');
            }
          });
        var a=$("#comment").val();
        if (a!=''){
			var txt1 = "<li class='sent'><img src='profiles/sending_msg.gif' alt='' /><p>"+a+"</p></li>";
            $("#my_messages ul").append(txt1);     // Append new elements
            $('#my_messages').scrollTop($('#my_messages')[0].scrollHeight);
        }
          $('#comment').val('');
          
        });
      });
      </script>
	        <div id="sidepanel"> <div id="login"><h1>Suggestion!</h1><h2>Signing in will save this chat for you so that you can message here whenever you want. You will be notified too.</h2>
	        <?include_once("messenger_login.php")?>
	        <p><span class="btn-round">or</span></p><p><a class="gmail-before"><span class="fontawesome-google-plus"></span></a><a href="/login.php"><button href="go" class="gmail">Login Using Google</button></a></p></div> <h3>Don't have an account? <a href="signup.php">Signup</a> for free</h3> </div>
</div>
	</div>
		</div>
</body>
<script>
$('#my_messages').scrollTop($('#my_messages')[0].scrollHeight);

      $(function () {
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            enctype: 'multipart/form-data',
            url: 'home.php',
            data: $('form').serialize(),
            success: function () {
                //$('#comment').val('');
            }
          });
        var a=$("#comment").val();
        if (a!=''){
            <?
            if ($_SESSION['currentview_'.$stamp] =="home"){$a = "public_preview";}else{$a = "their_public_preview";}
            ?>
          document.getElementById("<?echo $a?>").innerHTML = a;
			var txt1 = "<li class='sent'><img src='profiles/sending_msg.gif' alt='' /><p>"+a+"</p></li>";
            $("#my_messages ul").append(txt1);     // Append new elements
            $('#my_messages').scrollTop($('#my_messages')[0].scrollHeight);

        }
          $('#comment').val('');
          
        });
      });
      </script>
</html>