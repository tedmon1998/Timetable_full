<?php
require_once('.htconnect');
$link = mysqli_connect($db_host, $db_user, $db_password, $db_database);
$query = ("DELETE FROM `access_token` WHERE `time` <= DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 15 MINUTE);");
$result = mysqli_query($link, $query);
$query = ("DELETE FROM `refresh_token` WHERE `time` <= DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 7 DAY);");
$result = mysqli_query($link, $query);
mysqli_close($link);
?>