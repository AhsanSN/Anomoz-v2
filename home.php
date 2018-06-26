<?include_once('validating_before_entering_home.php');
include_once("popup/allow_notf.php");?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">

<?
if(isset($_POST["new_message"]))
{
    $new_message = $_POST["new_message"];
    $new_message = htmlspecialchars($new_message);
    //$sent_pic =  $_POST["fileToUpload"];
    //$a=basename($_FILES["fileToUpload"]["name"]);

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
    
    <title><?if ($_SESSION['currentview_'.$stamp] == "home"){echo "Home";}if ($_SESSION['currentview_'.$stamp] == "create_group"){echo "Create Group";}if ($_SESSION['currentview_'.$stamp] == "person"){echo $_POST['username'];}if ($_SESSION['currentview_'.$stamp] == "find_people"){echo "Find People/Groups";}if ($_SESSION['currentview_'.$stamp] == "group"){echo $_POST['username'];}if ($_SESSION['currentview_'.$stamp] == "settings"){echo "Settings";}?> - Anomoz</title>
<head>
<link rel="manifest" href="manifest.json">
<?include_once("css/home_css.php");?>
<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/sw.js').then(function (registration) {
            console.log('Service worker successfully registered on scope', registration.scope);
        }).catch(function (error) {
            console.log('Service worker failed to register');
        });
    });
}
</script>
</head><body>
<div id="frame">
	<div id="sidepanel">
	    <a onclick="expand_contacts()" style="all: unset;"><div id="expand_arrow"></div></a>
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="<?echo $session_pic?>" class="online" alt="" />
				<p id="test1"><?echo $session_username?></p>
				<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
				<div id="expanded">
					<a class="btn" href="home.php?logout=true">Logout</a>
					<br><br>
					<a class="btn-settings" name="twitter" href="/?c=settings" >Settings</a>
					<br>
					<a class="btn-download" style="color: white;" href="/?c=notf"><i class="material-icons"  style="font-size:36px">notifications_active</i></a>
					<a class="btn-bell" style="color: white;" href="#"><i class="material-icons" style="font-size:36px">file_download</i></a>
					<!--<a><i class="material-icons" style="font-size:36px">notifications_active</i>
                    </a>-->

				</div>
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" id="search_box" onkeyup="show_searched_contacts()" placeholder="Search contacts..." />
		</div>
		<div id="contacts">
			<ul>
			    <!--By Default - my public wall-->
			    <?
                $sql="SELECT * FROM nMessages Where usernumber='$session_usernumber'";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while($row= $result->fetch_assoc())
                    {
                        $last_message = $row['last_message'];
                    }
                }
			    ?>
			    <a onclick="<?unset($_SESSION['name']);?>" href="/" style="all: unset;">
				<li class="contact <?if ($_SESSION['currentview_'.$stamp] == "home"){echo"active";}?>">
					<div class="wrap">
						<span class="contact-status online"></span>
						<img src="<?echo $session_pic?>" alt="" />
						<div class="meta">
							<p class="name"><p class="name">My Public Wall</p></p>
							<p id="public_preview" class="preview"><?echo $last_message?></p>
						</div>
					</div>
				</li>
				</a>
				<!--Person I am chatting with-->
				<?if (($_SESSION['currentview_'.$stamp] == "person")||($_SESSION['currentview_'.$stamp] == "group"))
				{
				    ?>
				<a href="" style="all: unset;">
				<li class="contact active">
					<div class="wrap">
						<img src="<?echo $_POST['pic']?>" alt="" />
						<div class="meta">
							<p class="name"><?if (isset($_POST['username'])){echo $_POST['username'];}?></p>
							<p id="their_public_preview" class="preview">Loading...</p>
						</div>
					</div>
				</li>
				</a>
				    <?
				}
				?>
				<?
				include_once("get_chats.php");
				?>
			</ul>
		</div>
		<?echo "<script>var loaded_chats = ". $js_array . ";\n</script>";?>
		<div id="bottom-bar">
		    <div id="i_side_btn">
		    <a href="/?c=find_people">      
			<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Find people</span></button>
			</a>
			<a href="/?c=create_group">
			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Create group</span></button></a>
			</div>
		</div>
	</div>

	    <div class="content">
		<div class="contact-profile">
			<img src="<?if ($_SESSION['currentview_'.$stamp] == "home"){echo $session_pic;}if ($_SESSION['currentview_'.$stamp] == "person"){echo $_POST['pic'];}if ($_SESSION['currentview_'.$stamp] == "create_group"){echo "profiles/group.png";}if ($_SESSION['currentview_'.$stamp] == "find_people"){echo "profiles/find_people.png";}if ($_SESSION['currentview_'.$stamp] == "settings"){echo "profiles/settings.png";}if ($_SESSION['currentview_'.$stamp] == "group"){echo $_POST['pic'];}?>" alt="" />
			<p>
			    <p><?if ($_SESSION['currentview_'.$stamp] == "home"){echo"My Public Wall ";}if ($_SESSION['currentview_'.$stamp] == "group"){echo $_POST['username'];}if ($_SESSION['currentview_'.$stamp] == "create_group"){echo "Create Group";}if ($_SESSION['currentview_'.$stamp] == "find_people"){echo "Find People/Groups";}if ($_SESSION['currentview_'.$stamp] == "settings"){echo "Settings";}if ($_SESSION['currentview_'.$stamp] == "person"){if (isset($_POST['username'])){echo $_POST['username'];}}?><a href="#" style="text-decoration:none;" ><span id="demo" onclick="<?if ( $_SESSION['currentview_'.$stamp] == "home"){echo "about_my_public()";};
			    if ($_SESSION['currentview_'.$stamp] == "home"){echo "about_their_public()";};?>" style="color:#32465a; position: absolute;
    right: 6px; top:7px"><i class="material-icons" style="font-size:36px">info_outline</i>
</span></a></p></p>

		</div>
		<!--messages here -->
	
<div id="my_messages" class="messages">
<ul id="messages_ul"> 
<?if ($_SESSION['currentview_'.$stamp] == "home"){include_once("get_messages/my_public.php");}if ($_SESSION['currentview_'.$stamp] == "group"){include_once("get_messages/group.php");};if ($_SESSION['currentview_'.$stamp] == "person"){include_once("get_messages/their_public.php");};if ($_SESSION['currentview_'.$stamp] == "create_group"){include_once("create_group.php");}if ($_SESSION['currentview_'.$stamp] == "find_people"){include_once("find_people.php");}if ($_SESSION['currentview_'.$stamp] == "settings"){include_once("settings.php");}?>
</ul>
</div>
<?$current_messages_n = 10;$new_messages_n = 11;?>
<div class="item"></div>
<script>
$('#my_messages').scrollTop($('#my_messages')[0].scrollHeight);

$(".item").each(function() {
    $this = $(this);
var dataString = {s: "<?echo $_SESSION['currentview_'.$stamp]?>", r:"<?echo $search_usernumber?>", st: "<?echo $stamp?>"};
$.ajaxSetup({cache:false});
function timeLeft() {
$.ajax({
  type: "POST",
  url: "get_content_home.php",
  dataType: "html",
  data: dataString, 
  success: function(result) {
      if (getCookie("redirect_ajax") == "none"){
    $this.html(result);
    timeLeft();
    window.setInterval(function() {
    }, 5);}
  }
});
}
timeLeft();
});
</script>

<!--ends here-->
		<?if (($_SESSION['currentview_'.$stamp] != "create_group")&&($_SESSION['currentview_'.$stamp] != "find_people")&&($_SESSION['currentview_'.$stamp] != "settings")){ ?>
		<form method="get" id="message_box"class="message-input" enctype="multipart/form-data">
			<div class="wrap">
			<input name="new_message" type="text" id="comment" placeholder="Write your message..." />
			<input name="s" type="text" id="comment" value="<?echo $stamp?>" hidden />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<!--
			<input name="fileToUpload" id="fileToUpload" type="file" class="fa fa-paperclip attachment" >style="width: 40px"-->
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</form>
		<?}?>
	</div>
</div>
<?include_once("useless/logout_menu.php")?>
<script>
</script>
</body>
<!--Loading JSs-->
<script src="https://www.jquery-az.com/javascript/alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://www.jquery-az.com/javascript/alert/dist/sweetalert.css">
<script type="text/javascript" src="popup/js/about_my_public.js"></script>
<script type="text/javascript" src="popup/js/about_their_public.js"></script>
<script type="text/javascript" src="popup/js/all_about.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<?if (($_SESSION['currentview_'.$stamp] != "create_group")&&($_SESSION['currentview_'.$stamp] != "find_people")&&(($_SESSION['currentview_'.$stamp] != "settings"))){?>
<script>
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
      <?}?>
      <script>
      function expand_contacts(){
          if ((document.getElementById("search").style.display)=="block")
          {
              document.getElementById("sidepanel").style.width = "58px";
          document.getElementById("profile").style.width = "25px auto";
          document.getElementById("search").style.display = "none";
          document.getElementById("expand_arrow").style.left = "0px";
          document.getElementById("expand_arrow").style.transform = "rotate(0deg)";
          $(document).ready(function(){
    $("i_name").css("display", "none");
    $("frame, .content").css("display", "block");
    $("contacts, .contact, .wrap, .meta").css("display", "none");
    $("contacts, ul, li, .contact").css("padding", "6px 10px 46px 8px");
    $("i_side_btn").css("display", "none");
    $("sidepanel, profile, .wrap, i.expand-button").css("display", "none");
    });
          }
          else
          {
          document.getElementById("sidepanel").style.width = "100%";
          document.getElementById("profile").style.width = "25px auto";
          document.getElementById("search").style.display = "block";
          document.getElementById("expand_arrow").style.left = "85%";
          document.getElementById("expand_arrow").style.transform = "rotate(180deg)";

          $(document).ready(function(){
              $("i_name").css("display", "inline");
              $("frame, .content").css("display", "none");
    $("contacts, .contact, .wrap, .meta").css("display", "block");
    $("contacts, ul, li, .contact").css("padding", "10px 0 15px 0px");
    $("sidepanel, profile, .wrap, i.expand-button").css("display", "block");
    });
          }
      }
      var all_contacts = document.getElementById("contacts").innerHTML;

document.getElementById("search_box").value ='';
function show_searched_contacts(){
    var search = document.getElementById("search_box").value;
    if (search!= '')
    {var $myList = $('#contacts');
        document.getElementById("contacts").innerHTML = " ";
        for (var i = 0; i < loaded_chats.length; i++) {
            if(loaded_chats[i].toLowerCase().search(search.toLowerCase()) != -1)
            {
                var $deleteLink = $("<ul><a href='/"+loaded_chats[i]+"' style='all: unset;'><li class='contact'><div class='wrap'><img src='https://www.anomoz.com/profiles/p1.jpg' alt='' /><div class='meta'><p class='name'>"+loaded_chats[i]+"</p><p class='preview'></p></div></div></li></ul></a>");
                var $entry = $('<a></a>')
                $entry.append($deleteLink)
                $myList.append($entry);
            }
        } 
    }
    if (search== '')
    {
        document.getElementById("contacts").innerHTML = all_contacts;
    }
}

</script>
</html>