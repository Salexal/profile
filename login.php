<?php


header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.58:63341");
header("Access-Control-Allow-Credentials: true");
    $date = array('message'=>'success');
    echo json_encode($date);


?>