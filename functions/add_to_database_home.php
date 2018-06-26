<?
function my_wall(){
    //my public message
	$variable = $_POST['variable'];
	$sql="INSERT INTO Messages(id, message, time, me) VALUES ('$session_usernumber', '$variable' , now(),'1')";
    if(!mysqli_query($con,$sql))
    {
    echo"can not";
    }
}
?>