<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: cache-control, x-file-name, x-file-size, x-requested-with");

// header("HTTP/1.1 402 Payment Required");

$response = array_pop($_FILES);

$response["url"] = "http://snap.as".$response["tmp_name"]."/".$response["name"];

echo json_encode($response);

// print_r($_FILES);
// print_r($_POST);