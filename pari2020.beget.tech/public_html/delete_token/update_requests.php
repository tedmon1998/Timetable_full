<?php
require_once('.htconnect');
$link = mysqli_connect($db_host, $db_user, $db_password, $db_database);
$query = ("UPDATE `n_requests` SET `num` = '1'");
$result = mysqli_query($link, $query);
mysqli_close($link);
?>