<?
$chats=array();
$message_query_p_s="SELECT * FROM Private_chats Where started_by='$session_usernumber' ORDER by no DESC";
$result_s = $con->query($message_query_p_s);
if ($result_s->num_rows > 0) {
    while($row_s= $result_s->fetch_assoc())
    {
        if ($row_s['name_for'] !=$session_username)
        {
                $s=$row_s['name_for'];
                array_push($chats,"$s");
                $sql="SELECT * FROM nMessages Where usernumber='$s'";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while($row= $result->fetch_assoc())
                    {
                        $lastMsg = $row['last_message'];
                    }
                }
        ?>      <a href="<?if($row_s['url']!=''){echo $row_s['url'];}else{echo $row_s['name_for'];}?>" style="all: unset;">
                <li class="contact">
					<div class="wrap">
						<img src="https://www.anomoz.com/profiles/p1.jpg" alt="" />
						<div class="meta">
							<p class="name"><?echo $row_s['name_for']?></p>
							<p class="preview"><?echo $lastMsg?></p>
						</div>
					</div>
				</li>
				</a>
        <?
        }
    }
    $js_array = json_encode($chats);
}
?>


