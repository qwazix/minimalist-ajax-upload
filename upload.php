<?php

$response = array_pop($_FILES);

$response["url"] = "http://snap.as".$response["tmp_name"]."/".$response["name"];

echo json_encode($response);

// print_r($_FILES);
// print_r($_POST);