<?php
require_once '../connect/.htconnect';
$link = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM `all_days` ORDER BY `all_days`.`id`";
$result = mysqli_query ($link, $query);
if(mysqli_num_rows($result) > 0){
	$res["zagalovok"] = array();

	while ($row = mysqli_fetch_array($result)) {
		$zagalovok["id"] = $row["id"];
		$zagalovok["№"] = $row["№"];
		$zagalovok["n_k"] = $row["n_k"];
		$zagalovok["k_n"] = $row["k_n"];
		$zagalovok["n_p"] = $row["n_p"];
		$zagalovok["aud"] = $row["aud"];
		$zagalovok["prepod"] = $row["prepod"];
		$zagalovok["divisions"] = $row["divisions"];
		
		array_push($res["zagalovok"], $zagalovok);
	}
	    $res["success"] = 1;
 
    echo json_encode($res);
} else {
    $res["success"] = 0;
    $res["message"] = "No products found";
 
    echo json_encode($res);
}
?>