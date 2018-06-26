<?//my public message box

$receiver_125 = $_SESSION['receiver_'.$stamp];
$message_query="SELECT * FROM Messages Where id='$receiver_125' ORDER BY no";
$result = $con->query($message_query);
$messageNo = 0;
$total = $result->num_rows;
if ($result->num_rows > 0) {
    
    while($row= $result->fetch_assoc())
    {
        $messageNo++;
        if($messageNo==$total)
        {
            ?>
            <script>document.getElementById("their_public_preview").innerHTML = "<?echo $row['message'];?>";</script>
            <?
        }
        if ($row['me'] ==1)
        {
            ?><li class="sent">
					<img src="profiles/sender.png" alt="" />
					<p><?echo $row['message'];?></p>
			</li><?
            
        }
        else
        {
            ?><li class="replies">
					<img src="profiles/their_pic.png" alt="" />
					<p><?echo $row['message'];?></p>
				</li><?
        }
    }

}
else
{
}

//pub_messages();
?>