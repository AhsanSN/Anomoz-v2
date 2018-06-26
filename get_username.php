<?
include_once('global.php');
?>
<meta name="description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
  <link rel="fluid-icon" href="/home/anomozlogo (1).png" title="Anomoz">
    <meta property="og:url" content="https://Anomoz.com">
    <meta property="og:site_name" content="Anomoz">
    <meta property="og:title" content="Make new friends online">
    <meta property="og:description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta name="theme-color" content="#0f2338">
<link rel="mask-icon" href="/home/anomozlogo (1).png" color="#000000">
    <link rel="icon"  href="/home/anomozlogo (1).png">

  <meta name="pjax-timeout" content="1000">
      <meta name="hostname" content="anomoz.com">
      <meta name="expected-hostname" content="anomoz.com">
<?
$url      = $_SERVER['PATH_INFO'];
$username = substr("$url", 1);
if ($username == "login") {
?> <script type="text/javascript"> window.location = "login.php"; </script> <?
}
if ($username == "signup") {
?> <script type="text/javascript"> window.location = "signup.php"; </script> <?
}

$message_query = "SELECT * FROM Users WHERE username = '$username'";
$result        = $con->query($message_query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $u_username = $row['username'];
        $found      = 1;
    }
} else {
    
    $message_query = "SELECT * FROM Groups WHERE URL = '$username'";
    $result        = $con->query($message_query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $u_username = $row['url'];
            $group      = 1;
        }
    } else {
        
        if ($logged == 1) {
            $_SESSION['name'] = "not_found";
            include_once("home.php");
        }
        if ($logged == 0) {
            include_once("useless/error_404.php");
        }
    }
}
if ($found == 1) {
    if ($logged == 1) {
        $_SESSION['name'] = $u_username;
        include_once("home.php");
    }
    if ($logged == 0) {
        $_SESSION['name'] = $u_username;
        include_once("messenger.php");
    }
}
if ($group == 1) {
    if ($logged == 1) {
        $_SESSION['name'] = $u_username;
        $_SESSION['group'] = "g";
        include_once("home.php");
    }
    if ($logged == 0) {
        $_SESSION['name'] = $u_username;
        $_SESSION['group'] = "g";
        include_once("messenger.php");
    }    
}
?> 