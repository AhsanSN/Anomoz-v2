<?
   // Check if image file is a actual image or fake image
   if(isset($_POST["name"])) {
   //change username
       $username_update = $_POST["name"];
       $sql="UPDATE Users SET username = '$username_update' WHERE usernumber = '$session_usernumber';";
       $session_username = $username_update;
       $_SESSION['username'] = $session_username ;
       if(!mysqli_query($con,$sql))
   {
       //echo"can not change";
   }
   //change group url
   for ($x = 1; $x < $_SESSION['value_i']; $x++) {
       $groupurl_update = $_POST["group_url_".$x];
       $groupurl_update_old =   $_SESSION["ini_group_number_".$x];
       $sql="UPDATE Groups SET url = '$groupurl_update' WHERE group_number = '$groupurl_update_old';";
       if(!mysqli_query($con,$sql))
   {
       //echo"can not change";
   }
   } 
   //change group hidden
   for ($x = 1; $x < $_SESSION['value_i']; $x++) {
       $groupurl_update = $_POST["group_hide_".$x];
       $groupurl_update_old =   $_SESSION["ini_group_number_".$x];

       $sql="UPDATE Groups SET hide = '$groupurl_update' WHERE group_number = '$groupurl_update_old';";
       if(!mysqli_query($con,$sql))
   {
       //echo"can not change";
   }
   }
   
   //change group name
   for ($x = 1; $x < $_SESSION['value_i']; $x++) {
       $groupname_update = $_POST["group_name_".$x];
       $groupname_update_old =   $_SESSION["ini_group_number_".$x];
       $sql="UPDATE Groups SET group_name = '$groupname_update' WHERE group_number = '$groupname_update_old';";
       if(!mysqli_query($con,$sql))
   {
       //echo"can not change";
   }
   } 
   
   //changing profile pic
       $target_dir = "profiles/";
   $target_file = $target_dir . "Anomoz_"."$session_usernumber".basename($_FILES["fileToUpload"]["name"]);
   
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
           $message =  "File is an image - " . $check["mime"] . ".";
           $uploadOk = 1;
       } else {
           $message = "File is not an image.";
           $uploadOk = 0;
       }
       // Check file size
   if ($_FILES["fileToUpload"]["size"] > 50000000) {
       $message = "Sorry, your file is too large.";

   $uploadOk = 0;
   }
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
   $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   $uploadOk = 0;
   }
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
   $message = "Sorry, your file was not uploaded.";
   
   // if everything is ok, try to upload file
   } else {
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $message = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       $sql="UPDATE Users SET pic = '$target_file' WHERE usernumber = '$session_usernumber';";
   $session_pic = $target_file;
   $_SESSION['pic'] = $session_pic;
   if(!mysqli_query($con,$sql))
   {
   $message = "can not change";
   }
   }}
   //changing group_photo_    
   for ($x = 1; $x < $_SESSION['value_i']; $x++) {
       $grouppic_update_old =   $_SESSION["ini_group_number_".$x];
    $target_dir = "profiles/";
   $target_file = $target_dir . "Anomoz_"."$session_usernumber".basename($_FILES["group_photo_".$x]["name"]);
   
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   $check = getimagesize($_FILES["group_photo_".$x]["tmp_name"]);
   if($check !== false) {
       $message =  "File is an image - " . $check["mime"] . ".";
       $uploadOk = 1;
   } else {
       $message = "File is not an image.";
       $uploadOk = 0;
   }
   // Check file size
   if ($_FILES["group_photo_".$x]["size"] > 50000000) {
   $message = "Sorry, your file is too large.";
   ?>
<?php
   $uploadOk = 0;
   }
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
   $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   $uploadOk = 0;
   }
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
   $message = "Sorry, your file was not uploaded.";
   
   // if everything is ok, try to upload file
   } else {
   if (move_uploaded_file($_FILES["group_photo_".$x]["tmp_name"], $target_file)) {
       $message = "The file ". basename( $_FILES["group_photo_".$x]["name"]). " has been uploaded.";
       $sql="UPDATE Groups SET pic = '$target_file' WHERE group_number = '$grouppic_update_old';";
   if(!mysqli_query($con,$sql))
   {
   $message = "can not change";
   }
   }}
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
   form fieldset input[type="file"] {
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
   form fieldset input:hover[type="file"] {
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
   <h1>Personal Information</h1>
   <br>
   <form action=" " method="post" enctype="multipart/form-data">
      <fieldset>
         <img style="border-radius: 50%;display: block;
            margin-left: auto;margin-right: auto; height:130px;width:130px;" src="<?echo $session_pic?>" alt="Profile picture">
         <br>
         <p><input type="file" name="fileToUpload" id="fileToUpload" style="width: 200px; position:relative;
            left:35%;" value="Change Picture"></p>
         <br>
         <p><input type="text" name="name" placeholder="Name" required value="<? echo "$session_username"?>"></p>
         <br>
         <p><input style="cursor:default;" type="text" name="link" placeholder="Email address" value="<? echo "$session_email"?>" readonly></p>
         <br>
         <?
            $message_queryp_s="SELECT * FROM Groups Where admin='$session_usernumber' ";
                 $result1_s = $con->query($message_queryp_s);
                 if ($result1_s->num_rows > 0) {
                     $is_admin = 1;
                 }
                 if ($is_admin == 1){
                     $_SESSION['value_i'] = 1; 
                     ?>
         <h1>Group Settings</h1>
         <?
            while($row= $result1_s->fetch_assoc())
            {
                ?>
         <h2>Group <?echo $_SESSION['value_i'].": ".$row['group_name'];?></h2>
         <p>
            <?$i = $_SESSION['value_i'];?>
            <img style="border-radius: 50%;display: block;
               margin-left: auto;margin-right: auto; height:130px;width:130px;" src="<?echo $row['pic']?>" alt="Profile picture">
            <br>
         <p><input type="file" name="group_photo_<?echo $i?>" id="group_photo_<?echo $i?>" style="width: 200px; position:relative;    left:35%;" value="Change Picture"></p>
         <br>
         <input type="text" value="Anomoz.com/" readonly="readonly" style="display:inline; width: calc(95px); right:0px; position:relative; cursor:default; ">
         <input name="group_url_<?echo $i?>" type="text" required  placeholder="Short URL" style="display:inline; width: calc(100% - 100px); right:0px; position:relative;" value="<?echo $row['url']?>"></p> 
         <br>
         <?$_SESSION["ini_group_number_".$i] = $row['group_number'];
            ?>
         <p><input type="text" name="group_name_<?echo $i?>" placeholder="Group Name" required value="<?echo $row['group_name']?>" ></p>
         <br>

         <p><input value="0" type="radio" name="group_hide_<?echo $i?>" <?if ($row['hide'] == 0){echo "checked";}?> >  Make my group public.</p>
         <br>
         <p><input value="1" type="radio" name="group_hide_<?echo $i?>" <?if ($row['hide'] == 1){echo "checked";}?>>  Make my group secret (Users won't be able to find the group using the search bar. But, Users with link will be able to visit the group. )</p>
         <br>
         <?
            $_SESSION['value_i'] = $_SESSION['value_i'] +1;
            }
            }
            ?>
         <p><input name="submit" type="submit" value="Save changes"></p>
      </fieldset>
   </form>
</div>
