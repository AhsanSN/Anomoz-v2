<?include_once("global.php");?><?if ($logged==1){ ?> <script type="text/javascript"> window.location = "/"; </script> <?}if(isset($_POST["email"])){ $email = $_POST["email"]; $password = $_POST["password"];if((!$email)||(!$password)){ $message = "Please insert both fields.";} else{ $query = "SELECT * FROM Users WHERE email = '$email' OR username = '$email' AND password='$password' "; $result = $con->query($query); if ($result->num_rows > 0){ while($row = $result->fetch_assoc()) { $username = $row['username']; $usernumber = $row['usernumber']; $email = $row['email']; $school = $row['school']; $description = $row['description']; $delete = $row['delete']; $pic = $row['pic']; } $_SESSION['username'] = $username; $_SESSION['password'] = $password; $_SESSION['usernumber'] = $usernumber; $_SESSION['email'] = $email; $_SESSION['school'] = $school; $_SESSION['description'] = $description; $_SESSION['delete'] = $delete; $_SESSION['pic'] = $pic; ?> <script type="text/javascript"> window.location = "/"; </script> <? } else { } }} ?>
<!DOCTYPE html><html class=''>
<head>
    <title>Page not found - Anomoz</title>
<?include_once("css/error_css.php");?>
</head><body>
<div id="frame">
    <div id="sidepanel"> <div id="login"><h1>Suggestion!</h1><h2>Signing in will save this chat for you so that you can message here again anytime you want.</h2><form action="login.php" method="post"><fieldset><p><input type="text" name="email" required placeholder="Username" ></p> <!-- JS because of IE support; better: placeholder="Username" --> <br><p><input type="password" name="password" placeholder="Password" required ></p> <br> <input type="submit" value="Login"></p></fieldset></form><p><span class="btn-round">or</span></p><p><a class="gmail-before"><span class="fontawesome-google-plus"></span></a><button class="gmail">Login Using Google</button></p></div> <h3>Don't have an account? <a href="signup.php">Signup</a> for free</h3> </div>
        
	    <div class="content">
	        <br><br><br><br><br><br>
	        <h1 style="color:#2c3e50;">Oops! looks like you have entered an incorrect URL.</h1>
	        <h2 style="color:#2c3e50;">You can <a href="login.php">login</a> now to search for the person or group you were looking for. If you don't have an account, <a href="signup.php">signup</a> here.</h2>
	    </div>
	</div>
		
</body>
</html>