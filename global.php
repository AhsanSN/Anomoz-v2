<?
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);
ini_set('session.save_path', '/tmp');

session_start();

//maybe you want to precise the save path as well
include_once("database.php");

//maybe you want to precise the save path as well
//cheaking
if(isset($_SESSION['username']))
{
    $session_usernumber = $_SESSION['usernumber'];
    $session_username = $_SESSION['username'];
    $session_email = $_SESSION['email'];
    $session_ip = $_SESSION['ip'];
    $session_pic = $_SESSION['pic'];
    $session_swkey = $_SESSION['swkey'];
    ?><script>document.cookie = 'session_usernumber='+<?echo $session_usernumber?>+ '; path=/';</script><?
//if memebr logged in
if (isset($_SESSION['usernumber']))
{
    $query = "SELECT *  FROM Users WHERE usernumber='$session_usernumber'";
}
if (isset($_SESSION['password']))
{
    $session_password = $_SESSION['password'];
    $query = "SELECT *  FROM Users WHERE username='$session_username' AND password='$session_password'";
}
$result = $con->query($query);
if ($result->num_rows > 0){
    $logged=1;
}
else
{
    header("Location: logout.php");
}
}
else
{
        $logged=0;
}
?>