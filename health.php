<?php
header("Content-Type: application/json");
date_default_timezone_set("UTC"); // Set your desired timezone

$response = array(
    "status" => "ok",
    "server_time" => date("c") // ISO 8601 format
);

echo json_encode($response);
?>
