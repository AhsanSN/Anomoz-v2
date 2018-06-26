<?include_once("global.php");
function logout() {
    session_destroy();
  }
  if (isset($_GET['logout'])) {
    logout();
    $logged=0;
  }
if (!isset($_POST['s'])){$stamp = (mt_rand(910,91084));}
if (isset($_POST['s'])){$stamp = $_POST['s'];}  

if ($logged==0)
{
    ?>
            <script type="text/javascript">
            window.location = "login.php";
            </script>
            <?php
}
?>
<?
if(isset($_POST['token'])){
    $a = $_POST['token'];
    $_SESSION['token'] = $a;
    $sql="INSERT INTO Token(usernumber, token) VALUES   ('$session_usernumber', '$a') ON DUPLICATE KEY UPDATE usernumber='$session_usernumber'";
        if(!mysqli_query($con,$sql))
        {
        echo"can not";
        }
}
?>
<link rel="manifest" href="manifest.json"> 
<div id="tokenforn0"></div>
<script>
function getCookie(cname) {
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
var currentToken_notf_a = getCookie("currentToken_notf");
var time = getCookie("timelimit");

if((currentToken_notf_a != '')&&(time!='1')){
    console.log("adding_  "+currentToken_notf_a);
    document.getElementById("tokenforn0").innerHTML ='<form id="tokenforn" action=" " method="post"><input type="text" hidden name="token" value=""><button type="submit" hidden></button></form>';
    document.getElementById("tokenforn").elements[0].value = currentToken_notf_a;
document.cookie = "currentToken_notf=; path=/;";
document.cookie = "timelimit=1; path=/;";
document.getElementById('tokenforn').submit();
}
//redirect none
document.cookie = "redirect_ajax=none; path=/;";
</script>
<?
if (isset($_SESSION['group']))
{
    $_SESSION['currentview_'.$stamp] = "group";
    unset($_SESSION['group']);
}
if (isset($_GET['c']))
{
    $view = $_GET['c'];
    if ($view=="create_group")
    {
        $_SESSION['currentview_'.$stamp] = "create_group";
    }
    else if ($view=="find_people")
    {
        $_SESSION['currentview_'.$stamp] = "find_people";
    }
    else if ($view=="settings")
    {
        $_SESSION['currentview_'.$stamp] = "settings";
    }
    else if ($view=="notf")
    {
        include_once("popup/allow_notf_btn.php");
        $_SESSION['currentview_'.$stamp] = "home";
    }
    else if ($view=="cn")
    {
        //clear notifications
        $sql_person="DELETE FROM Notifications
WHERE usernumber = $session_usernumber";
    if(!mysqli_query($con,$sql_person))
    {
    //echo"can not 1";
    }
        $_SESSION['currentview_'.$stamp] = "home";
    }
    else if ($view=="download")
    {
        $_SESSION['currentview_'.$stamp] = "home";
        ?><button name="addToHome" id="addToHome" class="addToHome">Add To Homescreen</button> 

        <script>
       
       var deferredPrompt;

window.addEventListener('beforeinstallprompt', function(e) {
  console.log('beforeinstallprompt Event fired');
  e.preventDefault();

  // Stash the event so it can be triggered later.
  deferredPrompt = e;

  return false;
});
var btnSave = document.getElementById("addToHome");
btnSave.addEventListener('click', function() {
  if(deferredPrompt !== undefined) {
    // The user has had a postive interaction with our app and Chrome
    // has tried to prompt previously, so let's show the prompt.
    deferredPrompt.prompt();

    // Follow what the user has done with the prompt.
    deferredPrompt.userChoice.then(function(choiceResult) {

      console.log(choiceResult.outcome);

      if(choiceResult.outcome == 'dismissed') {
        console.log('User cancelled home screen install');
      }
      else {
        console.log('User added to home screen');
      }

      // We no longer need the prompt.  Clear it up.
      deferredPrompt = null;
    });
  }
});

    </script>
        <?
    }
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
        $_SESSION['receiver_pic_'.$stamp] = $row['pic'];
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
                $_SESSION['receiver_group_'.$stamp] = $row['group_number'];
                $_SESSION['receiver_pic_'.$stamp] = $row['pic'];
                $_SESSION['currentview_'.$stamp] = "group";
            }
        }
    }
}
//on_screen_notification
include_once("popup/on_screen_notf.php")
?>
