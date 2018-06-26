<?include_once("global.php");?>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <?if ($logged==1){ ?>
        <script type="text/javascript">
            window.location = "/";
        </script>
        <?}if(isset($_POST["email"])){ $email = $_POST["email"]; $password = $_POST["password"];if((!$email)||(!$password)){ $message = "Please insert both fields.";} else{ $query = "SELECT * FROM Users WHERE email = '$email' OR username = '$email' AND password='$password' "; $result = $con->query($query); if ($result->num_rows > 0){ while($row = $result->fetch_assoc()) { $username = $row['username'];$swkey = $row['swkey']; $usernumber = $row['usernumber']; $email = $row['email']; $school = $row['school']; $description = $row['description']; $delete = $row['delete']; $pic = $row['pic']; } $_SESSION['username'] = $username;$_SESSION['swkey'] = $swkey; $_SESSION['password'] = $password; $_SESSION['usernumber'] = $usernumber; $_SESSION['email'] = $email; $_SESSION['school'] = $school; $_SESSION['description'] = $description; $_SESSION['delete'] = $delete; $_SESSION['pic'] = $pic; ?>
            <script type="text/javascript">
                window.location = "/";
            </script>
            <? } else { } }} ?>
                <meta name=viewport content="width=device-width, initial-scale=1">
                <html lang="en-Us">

                <head>
                    <title>Login - Anomoz</title>
                    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
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
  
  
                </head>
                <style>
                    @charset "utf-8";fieldset, form {margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;}/* ---------- FONTAWESOME ---------- */[class*="fontawesome-"]:before { font-family: 'FontAwesome', sans-serif;}/* ---------- GENERAL ---------- */body {background: #32465a;color: #edeff2;font: 100%/1.5em 'Open Sans', sans-serif; margin: 0; text-align: center;}a { text-decoration: none; }h1 { font-size: 1em; margin: -12px 0 0px;}@media screen and (max-width: 735px) { h1 { font-size: 1em; margin: -12px 0 0px; margin-top: -22px;}}h1, p {margin-bottom: 2px;}strong {font-weight: bold;}.uppercase { text-transform: uppercase; }/* ---------- LOGIN ---------- */#login {margin: 50px auto;width: 300px;}form fieldset input[type="text"], input[type="password"] {background: #e5e5e5;border: none;border-radius: 3px;color: #5a5656;font-family: inherit;font-size: 14px;height: 50px;outline: none;padding: 0px 10px;width: 300px; -webkit-appearance:none;}form fieldset input[type="submit"] {background-color: #008dde;border: none;border-radius: 3px;color: #f4f4f4;cursor: pointer;font-family: inherit;height: 50px;text-transform: uppercase;width: 300px; -webkit-appearance:none;}form fieldset a {color: #5a5656;font-size: 10px;}form fieldset a:hover { text-decoration: underline; }.btn-round {background: #5a5656;border-radius: 50%;color: #f4f4f4;display: block;font-size: 12px;height: 50px;line-height: 50px;margin: 30px 125px;text-align: center;text-transform: uppercase;width: 50px;}.facebook-before {background: #0064ab;border-radius: 3px 0px 0px 3px;color: #f4f4f4;display: block;float: left;height: 50px;line-height: 50px;text-align: center;width: 50px;}.facebook {background: #0079ce;border: none;border-radius: 0px 3px 3px 0px;color: #f4f4f4;cursor: pointer;height: 50px;text-transform: uppercase;width: 250px;}.gmail-before {background: #a3372a;border-radius: 3px 0px 0px 3px;color: #f4f4f4;display: block;float: left;height: 50px;line-height: 50px;text-align: center;width: 50px;}.gmail {background: #ce3c2b;border: none;border-radius: 0px 3px 3px 0px;color: #f4f4f4;cursor: pointer;height: 50px;text-transform: uppercase;width: 250px;}h3 { color: #ffffff; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 20px; margin: 20px 0 20px; text-align: center; }a { color: #008dde; font-weight: 600;}
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
                <body >

                                <div id="login">
                        <h1>Welcome back!</h1>
                        <form action="login.php" method="post">
                            <fieldset>
                                <p><input type="text" required name="email" placeholder="Username OR Email"></p>
                                <!-- JS because of IE support; better: placeholder="Username" -->
                                <p><input type="password" name="password" placeholder="Password" required></p>
                                <p><input type="submit" value="Login"></p>
                            </fieldset>
                        </form>
                        <p><span class="btn-round">or</span></p>
                        
                        <div id="gSignInWrapper">
    <div id="customBtn" class="customGPlusSignIn">
        <span class="label">Login/Signup with Google</span>
    </div>
  </div>
                        <h3>Don't have an account? <a href="signup.php">Signup</a> for free.</h3>
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