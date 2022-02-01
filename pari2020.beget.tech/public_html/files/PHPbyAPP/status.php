<?php
    require_once '../connect/.htconnect';
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `status_update` ORDER BY `id` ASC";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $stat["update"] = $row["status"];
    }
    $status["status"]=array();
    array_push($status["status"], $stat);
    echo json_encode($status);
    mysqli_close($link);
?>