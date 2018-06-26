<!--database connection-->
<?php
    
$host='localhost';
$username='anomozco_chatuser1';
$user_pass='XhJ6a~U%C_Ws';
$database_in_use='anomozco_chat';

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);
if (!$con)
{
    echo"not connected";
}
if (!mysqli_select_db($con,$database_in_use))
{
    echo"database not selected";
}
?>