<?php
require_once '../connect/.htconnect';
$link = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM `information` ORDER BY `information`.`id` ASC";
$result = mysqli_query ($link, $query);
if(mysqli_num_rows($result) > 0){
	$res["zagalovok"] = array();

	while ($row = mysqli_fetch_array($result)) {
		$zagalovok = array();
		$zagalovok["name"] = $row["name"];
		$zagalovok["data"] = $row["data"];
		$zagalovok["phone"] = $row["phone"];
		$zagalovok["account"] = $row["account"];
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


