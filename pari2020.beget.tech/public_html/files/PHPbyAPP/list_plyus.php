<?php

    require_once '../connect/.htconnect';
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `plyus` ORDER BY `id` ASC";
    $result = mysqli_query($link, $query);
    
    if(mysqli_num_rows($result) > 0)
    {
        $res ["lists"] = array();
        
        while($row = mysqli_fetch_assoc($result))
        {
            $name["name"] =  $row["name"];
            $name["data"] =  datas($row["data"]);
            $name["status"] =  $row["status"];
            array_push($res["lists"], $name);
        }
    }
    
    function datas ($dat)
    {
        $data = substr($dat, 10, 15);
        $chas = substr($data, 0, 3)+2;
        $min = substr($data, 6, 6);
        $data = $chas.$min;
        return $data;
    }

    
    $res["success"] = 1;
    echo json_encode($res);
    
    
    mysqli_close($link);

?>