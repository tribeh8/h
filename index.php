<?php
file_put_contents('data.txt', print_r(json_decode(file_get_contents("php://input"), true), true));
?>
