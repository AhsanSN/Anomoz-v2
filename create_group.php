<?if (isset($_POST['url']))
{
    $group_name = $_POST['group_name'];
    $url = $_POST['url'];
    $link = $_POST['link'];
    //check if group already
    
    $message_queryp_s="SELECT * FROM Groups Where group_name='$group_name' OR url='$url' ";
    $result1_s = $con->query($message_queryp_s);
    if ($result1_s->num_rows > 0) {
        $allow=0;
        echo"<script>function show_message(){document.getElementById('error_message').innerHTML = '<h4>Oops! There is already a group with that URL or Name. Please try again.</h4>';} </script>";
    }
    else{$allow=1;}
    //adding to database
    if ($allow !=0)
    {
    $new_group_number = strtotime(date_default_timezone_get()) + (mt_rand(1049100000000,999749108474230));
    $sql="INSERT INTO Groups(group_number, group_name, url, n_messages, admin, website, pic) VALUES ('$new_group_number', '$group_name' , '$url','0', $session_usernumber,'$link', '/profiles/group_dp.png')";
        if(!mysqli_query($con,$sql))
        {
            echo"can not";
        }
    $sql1="INSERT INTO nMessages(usernumber, public_messages, last_message) VALUES ('$new_group_number', '1' , '')";
        if(!mysqli_query($con,$sql1))
        {
            echo"can not";
        }
        echo"<script>function show_message(){document.getElementById('login').innerHTML = '<h5>Group Created Successfully! <br><br><br> Link: <a>Anomoz.com/$url</a></h5>';}</script>";
    }    
}
?>
<meta name=viewport content="width=device-width, initial-scale=1">
<style>
    @charset "utf-8";
fieldset, form
 {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}
h1 { color: #2c3e50; font-family: 'Helvetica Neue', sans-serif; font-size: 25px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;}
h2 { color: #2c3e50; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: 300; line-height: 20px; margin: 20px 0 20px; text-align: center; }
h3 { color: #2c3e50; font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 200; line-height: 20px; margin: -10px 0 20px; text-align: center; }
h4 { color: red; font-family: 'Helvetica Neue', sans-serif; font-size: 20px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
padding: 14px; padding-bottom: -20px;}
h5 { color: green; font-family: 'Helvetica Neue', sans-serif; font-size: 20px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
padding: 24px; padding-bottom: -20px;}
#login {
	margin: 50px auto;
	width: 70%;
}
@media screen and (max-width: 735px) {
    #login {
	margin: 15px auto;
	width: 94%;
}
}
form fieldset input[type="text"], input[type="password"] {
	background: #2c3e50;
	border: none;
	border-radius: 3px;
	color: #ffffff;
	height: 50px;
	width: 100%;
	padding-left: 10px;
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
	width: 100%;
  -webkit-appearance:none;
}

form fieldset input:hover[type="submit"] {
	background-color: #004670;
	border: none;
	border-radius: 3px;
	color: #f4f4f4;
	cursor: pointer;
	font-family: inherit;
	height: 50px;
	text-transform: uppercase;
	width: 100%;
  -webkit-appearance:none;
}
</style>
<div id="error_message"></div>
<div id="login">
		<h1>You are about to create a group!</h1>
		<h2>A Group helps people come at one place and confess anonymously without revealing their identity. These groups are ideal alternatives to your university confession pages, where people can come together and talk about random things.</h2>
		<form action=" " method="post">
			<fieldset>
				<p>
				    <input type="text" value="Anomoz.com/" readonly="readonly" style="display:inline; width: calc(95px); right:0px; position:relative; cursor:default; ">
				    <input name="url" type="text" required  placeholder="Short URL" style="display:inline; width: calc(100% - 100px); right:0px; position:relative;"></p> 
                <br>
				<p><input type="text" name="group_name"placeholder="Group Name" required ></p><br>
				<p><input type="text" name="link"placeholder="Website Link" ></p><br>
				<h3>Adding a website link to an institution verifies your group such that no other group similiar to yours can be created. For example, if you are creating a confession group for your university, give the website link. </h3>
				    <input type="submit" value="Create Group"></p>
			</fieldset>
		</form>
</div>
<script>show_message();</script>	