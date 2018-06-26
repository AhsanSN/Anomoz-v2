<?
$search=$_SESSION['receiver_'.$stamp];
$message_query_8162="SELECT * FROM Messages Where id='$search' ORDER BY no";
$result_8162 = $con->query($message_query_8162);
?>
<ul>\
<?
if ($result_8162->num_rows > 0) {
    while($row= $result_8162->fetch_assoc())
    {
        if ($row['me'] ==1)
        {
            ?><li class='sent'>\
					<img src='profiles/sender.png' alt='' />\
					<p><?echo $row['message'];?></p>\
				</li>\<?
            
        }
        else
        {
            ?><li class='replies'>\
					<img src='profiles/their_pic.png' alt='' />\
					<p><?echo $row['message'];?></p>\
				</li>\<?
        }
    }

}
else
{
}
?>
</ul>