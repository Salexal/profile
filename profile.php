<?php

header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.58:63341");
header("Access-Control-Allow-Credentials: true");
$data = array(
    'userName'=>123123123
);
echo json_encode($data);
?>