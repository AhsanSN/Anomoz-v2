<?//my public message box

$message_query_8162="SELECT * FROM Messages Where id='$session_usernumber' ORDER BY no";
$result_8162 = $con->query($message_query_8162);
$messageNo = 0;
$total = $result_8162->num_rows;
if ($result_8162->num_rows > 0) {
    while($row= $result_8162->fetch_assoc())
    {
        $messageNo++;
        if($messageNo==$total)
        {
            ?>
            <script>document.getElementById("public_preview").innerHTML = "<?echo $row['message'];?>";</script>
            <?
        }
        if ($row['me'] ==0)
        {
            ?><li class="sent">
					<img src="<?echo $session_pic?>" alt="" />
					<p><?echo $row['message'];?></p>
				</li><?
            
        }
        else
        {
            ?><li class="replies">
					<img src="profiles/sender.png" alt="" />
					<p><?echo $row['message'];?></p>
				</li><?
        }
    }

}
else
{
}
?>