<?
$receiver_125 = $_SESSION['receiver_group_'.$stamp];
$message_query_8162="SELECT * FROM Messages Where id='$receiver_125' ORDER BY no";
$result_8162 = $con->query($message_query_8162);
$messageNo = 0;
?>
<ul>\
<?
if ($result_8162->num_rows > 0) {
    while($row= $result_8162->fetch_assoc())
    {
            ?><li class='sent'>\
					<p><?echo $row['message'];?></p>\
				</li>\<?
    }

}
else
{
}
?>
</ul>