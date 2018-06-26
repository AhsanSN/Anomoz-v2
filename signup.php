<?include_once ("global.php");

//checking previous
if (isset($_POST['username'])) {

    $allow        = 1;
    $new_username = $_POST['username'];
    $new_email    = $_POST["email"];
    $new_password = $_POST["password"];
    $new_ip       = $_SERVER['REMOTE_ADDR'];
    
    $email_query = "SELECT email FROM Users Where email='$new_email'";
    $result      = $con->query($email_query);
    if ($result->num_rows > 0) {
        $allow = 0;
        //already user
        if (isset($_POST['pic'])) {
            $new_usernumber = $_POST['usernumber'];
            
            $email_query = "SELECT * FROM Users Where email='$new_email' AND usernumber = '$new_usernumber'";
            $result      = $con->query($email_query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['usernumber'] = $row['usernumber'];
                    $_SESSION['username']   = $row['username'];
                    $_SESSION['email']      = $row['email'];
                    $_SESSION['pic']        = $row['pic'];
                    $_SESSION['swkey']        = $row['swkey'];
                    
                    $session_usernumber = $_SESSION['usernumber'];
                    $session_username   = $_SESSION['username'];
                    $session_email      = $_SESSION['email'];
                    $session_pic        = $_SESSION['pic'];
                    $session_swkey        = $_SESSION['swkey'];
                    
                    include_once("global.php");
                    
?><script type="text/javascript"> 
        console.log("r1");
        window.location = "/"; </script>
    <?
                    
                }
            }
        }
        if (!isset($_POST['pic'])) 
        {
            //email taken
        }    
    }
    
    if ($allow == 1) {
        if (isset($_POST['pic'])) {
            $new_usernumber = $_POST['usernumber'];
            $new_pic = $_POST['pic'];
            $sql            = "INSERT INTO Users(usernumber,username, email, password,ip,last_logged_in,school, description, pic) VALUES ('$new_usernumber','$new_username', '$new_email',now(),'$new_ip',now(),' ',' ','$new_pic')";
            if (!mysqli_query($con, $sql)) {
                echo "account notcreated";
            } else {
                $_SESSION['usernumber'] = $new_usernumber;
                $_SESSION['username']   = $new_username;
                $_SESSION['email']      = $new_email;
                $_SESSION['pic']        = $_POST['pic'];
                
                $session_usernumber = $_SESSION['usernumber'];
                $session_username   = $_SESSION['username'];
                $session_pic        = $_SESSION['pic'];
                $session_email      = $_SESSION['email'];
                
                $sql_new_chat="INSERT INTO nMessages(usernumber, public_messages, last_message) VALUES ('$session_usernumber', '1', ' ' )";
         $sql_new_chat_result = $con->query($sql_new_chat);
        if(!mysqli_query($con,$sql_new_chat_result))
        {
             echo "can not";
        }
                
?><script type="text/javascript"> window.location = "/"; </script>
    <?
            }
        }
        if (!isset($_POST['pic'])) {
            $new_usernumber = strtotime(date_default_timezone_get()) + (mt_rand(1049100000000, 999749108474230));
            $sql            = "INSERT INTO Users(usernumber,username, email, password,ip,last_logged_in,school, description, pic) VALUES ('$new_usernumber','$new_username', '$new_email','$new_password','$new_ip',now(),' ',' ','profiles/p1.jpg')";
            if (!mysqli_query($con, $sql)) {
                echo "account notcreated";
            } else {
                $_SESSION['usernumber'] = $new_usernumber;
                $_SESSION['username']   = $new_username;
                $_SESSION['email']      = $new_email;
                $_SESSION['pic']        = 'profiles/p1.jpg';
                
                $session_usernumber = $_SESSION['usernumber'];
                $session_username   = $_SESSION['username'];
                $session_pic        = $_SESSION['pic'];
                $session_email      = $_SESSION['email'];
                
                $sql_new_chat="INSERT INTO nMessages(usernumber, public_messages, last_message) VALUES ('$session_usernumber', '1', ' ' )";
         $sql_new_chat_result = $con->query($sql_new_chat);
        if(!mysqli_query($con,$sql_new_chat_result))
        {
             echo "can not";
        }
                
?><script type="text/javascript"> console.log("r3");window.location = "/"; </script>
    <?
            }
        }
    }
}
?>


<meta name=viewport content="width=device-width, initial-scale=1">
<html lang="en-Us">
   <head>
        <meta name="description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Anomoz">
  <link rel="fluid-icon" href="/home/anomozlogo (1).png" title="Anomoz">
    <meta property="og:url" content="https://Anomoz.com">
    <meta property="og:site_name" content="Anomoz">
    <meta property="og:title" content="Make new friends online">
    <meta property="og:description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
    <meta property="og:image" content="https://assets-cdn.github.com/images/modules/open_graph/github-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="https://assets-cdn.github.com/images/modules/open_graph/github-mark.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">

  <meta name="pjax-timeout" content="1000">
      <meta name="hostname" content="anomoz.com">
      <meta name="expected-hostname" content="anomoz.com">

    <meta name="enabled-features" content="UNIVERSE_BANNER,FREE_TRIALS,MARKETPLACE_INSIGHTS,MARKETPLACE_INSIGHTS_CONVERSION_PERCENTAGES">
      <meta name="viewport" content="width=device-width">
 <link crossorigin="anonymous" media="all" integrity="sha512-zyxweUSm/NG+juywqcMFSS4HbKjLWCZyEM2JjoCqnQUU6RVrHpHMwH66xreiaeMIRoA6vYuk0hm8S1X42r/YWQ==" rel="stylesheet" href="https://assets-cdn.github.com/assets/site-220df28424b63d1e24f3bd909efebe81.css" />

    <link rel="canonical" href="https://anomoz.com/" data-pjax-transient>

  <link rel="mask-icon" href="/home/anomozlogo (1).png" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="/home/anomozlogo (1).png">

<meta name="theme-color" content="#0f2338">
  <meta name="u2f-support" content="true">
  
       <script src="https://apis.google.com/js/api:client.js"></script>
  <script>
  
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      auth2 = gapi.auth2.init({
        client_id: '140850185426-85mc78v6jlu83v7onv1set2gjif8bu27.apps.googleusercontent.com',
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          var name= googleUser.getBasicProfile().getName();
        var id = googleUser.getBasicProfile().getId();
         var email = googleUser.getBasicProfile().getEmail();
              var pic = googleUser.getBasicProfile().getImageUrl();
              if(id!='')
              {
                  document.getElementById("google_data").elements[0].value = id;
                  document.getElementById("google_data").elements[1].value = name;
                  document.getElementById("google_data").elements[2].value = email;
                  document.getElementById("google_data").elements[3].value = pic;
                  document.getElementById('google_data').submit();
              }
        }, function(error) {
        });
  }
  </script>
      <style> @charset "utf-8";
fieldset, form {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* ---------- GENERAL ---------- */
body {
    background: #32465a;
    color: #edeff2;
    font: 100%/1.5em 'Open Sans', sans-serif;
     margin: 0;
     text-align: center;
}
a {
     text-decoration: none;
}
h1 {
     font-size: 1em;
}
@media screen and (max-width: 735px) {
     h1 {
         font-size: 1em;
         margin: -12px 0 0px;
         margin-top: -22px;
    }
}
h1, p {
    margin-bottom: 10px;
}
strong {
    font-weight: bold;
}
.uppercase {
     text-transform: uppercase;
}
/* ---------- LOGIN ---------- */
#login {
    margin: 50px auto;
    width: 300px;
}
form fieldset input[type="text"], input[type="password"], input[type="email"] {
    background: #e5e5e5;
    border: none;
    border-radius: 3px;
    color: #5a5656;
    font-family: inherit;
    font-size: 14px;
    height: 50px;
    outline: none;
    padding: 0px 10px;
    width: 300px;
     -webkit-appearance:none;
}
form fieldset input[type="submit"] {
    background-color: #008dde;
    border: none;
    border-radius: 3px;
    color: #f4f4f4;
    cursor: pointer;
    font-family: inherit;
    height: 50px;
    text-transform: uppercase;
    width: 300px;
     -webkit-appearance:none;
}
form fieldset a {
    color: #5a5656;
    font-size: 10px;
}
form fieldset a:hover {
     text-decoration: underline;
}
.btn-round {
    background: #5a5656;
    border-radius: 50%;
    color: #f4f4f4;
    display: block;
    font-size: 12px;
    height: 50px;
    line-height: 50px;
    margin: 30px 125px;
    text-align: center;
    text-transform: uppercase;
    width: 50px;
}
.facebook-before {
    background: #0064ab;
    border-radius: 3px 0px 0px 3px;
    color: #f4f4f4;
    display: block;
    float: left;
    height: 50px;
    line-height: 50px;
    text-align: center;
    width: 50px;
}
.facebook {
    background: #0079ce;
    border: none;
    border-radius: 0px 3px 3px 0px;
    color: #f4f4f4;
    cursor: pointer;
    height: 50px;
    text-transform: uppercase;
    width: 250px;
}
.gmail-before {
    background: #a3372a;
    border-radius: 3px 0px 0px 3px;
    color: #f4f4f4;
    display: block;
    float: left;
    height: 50px;
    line-height: 50px;
    text-align: center;
    width: 50px;
}
.gmail {
    background: #ce3c2b;
    border: none;
    border-radius: 0px 3px 3px 0px;
    color: #f4f4f4;
    cursor: pointer;
    height: 50px;
    text-transform: uppercase;
    width: 250px;
}
h3 {
     color: #ffffff;
     font-family: 'Open Sans', sans-serif;
     font-size: 14px;
     font-weight: 300;
     line-height: 20px;
     margin: 20px 0 20px;
     text-align: center;
}
a {
     color: #008dde;
     font-weight: 600;
}
</style>

<style type="text/css">
    #customBtn {
      background: #ce3c2b;border: none;border-radius: 3px 3px 3px 3px;color: #f4f4f4;cursor: pointer;padding:12px 0 12px;width: 300px;text-align: center;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font: 100%/1.5em 'Open Sans', sans-serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
    
  </style>
      <meta charset="utf-8">
      <title>Signup - Anomoz</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
   </head>
   <body>
      <div id="login">
         <h1>We are happy to see you joining us.</h1>
         <form action="signup.php" method="post">
            <fieldset>
               <p><input type="text" required name="username" placeholder="Username" ></p>
               <p><input type="email" required name="email" placeholder="Email" ></p>
               <p><input type="password" name="password" placeholder="Password" required ></p>
               <p><input type="submit" value="Signup"></p>
            </fieldset>
         </form>
         <p><span class="btn-round">or</span></p>

    <div id="gSignInWrapper">
    <div id="customBtn" class="customGPlusSignIn">
        <span class="label">Signup/Login with Google</span>
    </div>
  </div>

         <h3>Already have an account? <a href="login.php">login</a> now.</h3>
                        <h3><a href="/">Return to Homepage.</a></h3>
      </div>
      <!-- end login -->
      <form id="google_data" action="signup.php" method="post">
            <input type="text" hidden name="usernumber" value="">
            <input type="text" hidden name="username" value="">
            <input type="email" hidden name="email" value="">
            <input type="text" hidden name="pic" value="">
            <button type="submit" hidden></button>
            </form>
      <script>startApp();</script>
   </body>
</html>