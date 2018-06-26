<?
include_once('global.php');
$message_query = "SELECT * FROM Users ORDER BY RAND()
 LIMIT 1;";
$result        = $con->query($message_query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $u_username = $row['username'];
    }
}
$_SESSION['name'] = $u_username;
include_once("messenger.php");
?>