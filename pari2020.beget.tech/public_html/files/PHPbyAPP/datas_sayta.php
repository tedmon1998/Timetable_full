<?php

 $dd = date("d");
 $data = ($dd.$nn);

    $den["den"] = array();
    $dni["datas"] = $data;
    
    
    array_push($den["den"], $dni);
    echo json_encode($den);
?>