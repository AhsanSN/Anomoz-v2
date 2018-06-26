<?if (isset($_POST['people']))
{
    $people = $_POST['people'];
    if(substr($people,0,1)=='/')
    {
        ?><script type="text/javascript"> window.location = "<?echo $people?>"; </script><?
    }
    $message_query="SELECT * FROM Users WHERE username LIKE '%$people%'  ORDER BY username";
    $result = $con->query($message_query);
    $message_query="SELECT * FROM Groups WHERE group_name LIKE '%$people%'  ORDER BY group_name";
    $result_group = $con->query($message_query);
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
h1 { color: #2c3e50; font-family: 'Helvetica Neue', sans-serif; font-size: 25px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }
h2 { color: #2c3e50; font-family: 'Open Sans', sans-serif; font-size: 29px; font-weight: bold; line-height: 20px; margin: 40px 0 20px; text-align: center; }
h3 {  margin: 40px 0 20px; text-align: center; }
#login {
	margin: 50px auto;
	width: 70%;
}
@media screen and (max-width: 735px) {
    #login {
	margin: 50px auto;
	width: 94%;
}
}
form fieldset input[type="text"]{
	background: #2c3e50;
	border: none;
	border-radius: 3px;
	color: #ffffff;
	height: 50px;
	width: 100%;
	padding-left: 10px;
  -webkit-appearance:none;
  display:inline; width: calc(100% - 100px); left:0px;
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
	display:inline; width: calc(95px); left:0px; cursor:default; 
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
	display:inline; width: calc(95px); left:0px; cursor:default; 
  -webkit-appearance:none;
}
@media screen and (max-width: 735px) {
    form fieldset input[type="submit"] {display:none;}
    form fieldset input:hover[type="submit"] {display:none;}
    form fieldset input[type="text"] {
	background: #2c3e50;
	border: none;
	border-radius: 3px;
	color: #ffffff;
	height: 50px;
	width: 100%;
	margin: -30px 4px;
	padding-left: 10px;
  -webkit-appearance:none;
}
}
    @import url(https://fonts.googleapis.com/css?family=Raleway);
@import url(http://weloveiconfonts.com/api/?family=entypo);
html,body,.background {
	height: 100%;
	width: 100%;
	font-family: 'Raleway', sans-serif;
	color: #999;
}

a {
	text-decoration: none;
	color: #999;
}

[class*="entypo-"]:before {
	font-family: 'entypo', sans-serif;
}

[class*="entypo-"] {
	width: 1em;
	height: 1em;
}

a:hover {
	color: #777;
}

#card {
	width: 300px;
	margin: 10px 10px 30px 10px;
	display: inline-block;
	vertical-align: middle;
	background: #F0F0F0;
	border-radius: 3px 3px 4px 4px;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	border-top: 1px solid white;

	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
@media screen and (max-width: 735px) {
    #card {
	width: 200px;
	margin: 10px 10px 30px 10px;
	display: inline-block;
	vertical-align: middle;
	background: #F0F0F0;
	border-radius: 3px 3px 4px 4px;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	border-top: 1px solid white;

	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
}
.member-infos {
	padding: 10px;
	text-align: left;
	position: relative;
}

h1 {
	margin: -8px 3px;
}

h1 a {
	color: #4083A9;
	font-weight: bold;
	font-size: 1em;
}

h1 a:hover {
	color: #205F82;
}

.member-location a:before {
	margin-right: 5px;
}

.member-location {
	text-indent: 2px;
}

.follow,.options {
	width: 30px;
	height: 30px;
	text-align: center;
	line-height: 30px;
	background: #D3D3D3;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);

	-webkit-box-shadow: 0 2px 0 0 #C0C0C0;
	box-shadow: 0 2px 0 0 #C0C0C0;
	border-radius: 3px;
}

.follow:hover,.options:hover {
	-webkit-box-shadow: 0 1px 0 0 #C0C0C0;
	box-shadow: 0 1px 0 0 #C0C0C0;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	vertical-align: bottom;
	margin-bottom: -1px;
}

.member-parameters a {
	display: inline-block;
}

.member-parameters {
	margin-top: 0.1em;
}

.member-photo {
	position: absolute;
	border-radius: 50%;
	overflow: hidden;
	right: 10px;
	bottom: -30px;
	z-index: 3;
	width: 80px;
	height: 80px;
}

.member-photo img {
	display: block;
	font-weight: bold;
	border-radius: 50%;
}

.member-socials {
	display: inline-block;
	font-weight: bold;
	vertical-align: bottom;
	line-height: 1px;
}

.member-socials li {
	display: inline-block;
}

.shots-number,.followers {
	font-weight: normal;
	display: block;
	margin-top: 1px;
	font-size: 0.9em;
}

.member-contact {
	position: absolute;
	right: 1px;
	top: 1px;
}

.member-contact li {
	display: inline-block;
	margin-left: 10px;
}

.member-shots {
	height: 0px;
	overflow: hidden;
	border-radius: 0 0px 3px 3px;
	position: relative;

	-webkit-transition: all 1000ms cubic-bezier(.45,.17,.39,1.39);
	-moz-transition: all 1000ms cubic-bezier(.45,.17,.39,1.39);
	-o-transition: all 1000ms cubic-bezier(.45,.17,.39,1.39);
	-ms-transition: all 1000ms cubic-bezier(.45,.17,.39,1.39);
	transition: all 1000ms cubic-bezier(.45,.17,.39,1.39);
}

.shot-comments {
	margin: 0 15px;
}

.shot-stats a:hover span {
	color: #4083A9;
}

.member-shots:before {
	content: "";
	position: absolute;
	width: 100%;
	height: 16%;

	background: -webkit-linear-gradient(to bottom, rgba(0,0,0,0.10) 0%,rgba(0,0,0,0) 31%,rgba(0,0,0,0) 100%);
	background: -moz-linear-gradient(to bottom, rgba(0,0,0,0.10) 0%,rgba(0,0,0,0) 31%,rgba(0,0,0,0) 100%);
	background: -o-linear-gradient(to bottom, rgba(0,0,0,0.10) 0%,rgba(0,0,0,0) 31%,rgba(0,0,0,0) 100%);
	background: -ms-linear-gradient(to bottom, rgba(0,0,0,0.10) 0%,rgba(0,0,0,0) 31%,rgba(0,0,0,0) 100%);
	background: linear-gradient(to bottom, rgba(0,0,0,0.10) 0%,rgba(0,0,0,0) 31%,rgba(0,0,0,0) 100%);
	left: 0;
	top: 0;
	z-index: 2;
}

.shot {
	overflow: hidden;
	height: 10%;
	width: 100%;
	position: absolute;
	left: -100%;

	-webkit-transition: all 800ms cubic-bezier(.58,-0.67,1,.83);
	-moz-transition: all 800ms cubic-bezier(.58,-0.67,1,.83);
	-o-transition: all 800ms cubic-bezier(.58,-0.67,1,.83);
	-ms-transition: all 800ms cubic-bezier(.58,-0.67,1,.83);
	transition: all 800ms cubic-bezier(.58,-0.67,1,.83);
}

.shot-stats {
	position: absolute;
	left: 10px;
	top: 10px;
	color: #FFF;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	z-index: 2;
}

.shot-stats:after {
	position: absolute;
	content: "";
	width: 110%;
	height: 20%;
	left: -5%;
	top: -5%;
	background: rgba(0, 0, 0, 0.4);
	border-radius: 3px;
}

.shot-like.entypo-heart,.shot-comments.entypo-comment,.shot-views.entypo-eye {
	z-index: 1;
	position: relative;
}

.shot-stats a {
	color: #FFF;
}

.shot-stats span:before {
	margin-right: 2px;
}

.member-shots-number {
	padding-right: 6px;
	border-right: 1px solid rgba(0, 0, 0, 0.06);
	margin-right: 6px;
	margin-left: 6px;
}

.shot img {
	width: 120%;
	min-height: 10%;
	position: absolute;
	left: -10%;
}

#next1:checked ~ ul .s1,#next2:checked ~ ul .s2,#next3:checked ~ ul .s3 {
	left: 0;
}

.member-shots label {
	background: #F5F5F5;
	height: 40px;
	width: 40px;
	position: absolute;
	bottom: -20px;
	z-index: 8;
	border-radius: 50%;
	left: 50%;
	margin-left: -20px;
	line-height: 25px;
	cursor: pointer;
	text-align: center;
	text-shadow: 0 1px 0 #FFF;

	-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.18);
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.18);
}

.member-shots input:checked + label + input + label {
	z-index: 10;
}

.member-shots label:nth-of-type(1) {
	z-index: 9;
}

.next:hover {
	color: #777;
}

.wrapper-img {
	position: absolute;
	top: 0;
	height: 100%;
	width: 100%;
	z-index: 2;
	cursor: pointer;

	-webkit-transform: rotateX(0deg) rotateY(0deg);
	-moz-transform: rotateX(0deg) rotateY(0deg);
	-o-transform: rotateX(0deg) rotateY(0deg);
	-ms-transform: rotateX(0deg) rotateY(0deg);
	transform: rotateX(0deg) rotateY(0deg);

	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-backface-visibility: hidden;

	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

.member-photo:hover .wrapper-img {
	-webkit-transform: rotateX(180deg);
	-moz-transform: rotateX(180deg);
	-o-transform: rotateX(180deg);
	-ms-transform: rotateX(180deg);
	transform: rotateX(180deg);
}

.member-photo:hover .labelimg {
	-webkit-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-ms-transform: rotateX(0deg);
	transform: rotateX(0deg);
    z-index:3;
}
#center_result{
    	text-align:  center;
    }
.labelimg {
	position: absolute;
	top: 0;
	height: 100%;
	width: 100%;
	left: 0;
	z-index: 1;
	cursor: pointer;

	-webkit-transform: rotateX(-180deg);
	-moz-transform: rotateX(-180deg);
	-o-transform: rotateX(-180deg);
	-ms-transform: rotateX(-180deg);
	transform: rotateX(-180deg);

	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	backface-visibility: hidden;
	background: #4083A9;
	color: #F0F0F0;
	text-align: center;
	line-height: 80px;
	font-size: 40px;
	border-radius: 50%;

	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

#dropshots:checked ~ .member-shots {
	height: 250px;
}

#dropshots:checked + .member-infos .wrapper-img {
	-webkit-transform: rotateX(180deg);
	-moz-transform: rotateX(180deg);
	-o-transform: rotateX(180deg);
	-ms-transform: rotateX(180deg);
	transform: rotateX(180deg);
}

#dropshots:checked + .member-infos .labelimg {
	-webkit-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-o-transform: rotateX(0deg);
	-ms-transform: rotateX(0deg);
	transform: rotateX(0deg);
    z-index:3;
}

</style>
<div id="login">
		<form action=" " method="post">
			<fieldset>
				<p>
				    <input name="people" type="text" required placeholder="Search for people and groups">
				    <input type="submit" value="Find" ></p> 
			</fieldset>
		</form>
</div>
<?if (!isset($_POST['people']))
{

echo"<h3>Tip: Use / before your search to open User and Group URLs. Example, '/Ahsan Ahmed' .<h3>";
}?>
 

<?
if ($result->num_rows > 0) {
    ?>   <h2>People</h2><div id="center_result">
<?    
    while($row= $result->fetch_assoc())
        {
            ?>
                <div id="card">
                    <br>
    <div class="member-infos">
      <h1><a href="/<?echo $row['username']?>" class="member-name"><?echo $row['username']?></a></h1>
      <div class="member-parameters">
         <ul class="member-socials">
        <li class="member-follower"><a href="/<?echo $row['username']?>"><span class="followers">Individual</span></a></li>  
      </ul>
      </div>
      <div class="member-photo">
          <div for="dropshots" class="wrapper-img">
        <img style="border-radius: 50%;display: block;
            margin-left: auto;margin-right: auto; height:80px;width:80px;" src="<?echo $row['pic']?>" />   
            </div>
            <a href="/<?echo $row['username']?>" >
                  <label for="dropshots"  class="labelimg entypo-picture">
                      <img style="border-radius: 50%;display: block;
            margin-left: auto;margin-right: auto; height:80px;width:80px;"src="/profiles/send.png" alt="profile" />   
        </label>
        </a>
      </div>     
    </div>
</div>
            <?
        }
        ?></div><?
    }
    if (isset($_POST['people'])){
    if ($result->num_rows == 0) {
        ?><h3>No person found. Please try a short and general word.</h3><?
}}
    ?>
    <?
    if ($result_group->num_rows > 0) {
        ?><h2>Groups</h2><?
    ?><div id="center_result">
<?    
    while($row= $result_group->fetch_assoc())
        {
            if($row['hide'] == 0)
            {
            ?>
                <div id="card">
                    <br>
    <div class="member-infos">
      <h1><a href="/<?echo $row['url']?>" class="member-name"><?echo $row['group_name']?></a></h1>
      <div class="member-parameters">
         <ul class="member-socials">
        <li class="member-follower"><a href="/<?echo $row['url']?>"><span class="followers">Group</span></a></li>  
      </ul>
      </div>
      <div class="member-photo">
          <div for="dropshots" class="wrapper-img">
        <img style="border-radius: 50%;display: block;
            margin-left: auto;margin-right: auto; height:80px;width:80px;" src="<?echo $row['pic']?>" />   
            </div>
            <a href="/<?echo $row['url']?>" >
                  <label for="dropshots" class="labelimg entypo-picture">
                      <img style="border-radius: 50%;display: block;
            margin-left: auto;margin-right: auto; height:80px;width:80px;"src="/profiles/send.png" alt="profile" />
        </label>
        </a>
      </div>     
    </div>
</div>
            <?}
        }
        ?></div>

        <?
    
        ?><h2 style="font-size: 20px; font-weight: 100;">Hidden Groups are not shown in this list.</h2><?
    }
    if (isset($_POST['people'])){
        if ($result_group->num_rows == 0) {
        ?><h3>No Group found. Please try a short and general word.</h3>
        <h3>Also, Hidden Groups are not shown in this list.</h3><?
}}
    ?>
    