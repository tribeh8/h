<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
header('Access-Control-Allow-Methods:  POST, PUT, GET');
file_put_contents('data.txt', print_r(json_decode(file_get_contents("php://input"), true), true));
?>
