<?php


header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.57:63341");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
//    $date = array('message'=>'success');
//    echo json_encode($date);

$rws_post =  file_get_contents('php://input') ;
$mypost = json_decode($rws_post);
$username = (string)$mypost->userName;
$password = (string)$mypost->passWord;
$data = array("message"=>"success");
if($username==123&&$password==123){
    session_start();
    $_SESSION['username']=$username;
    echo json_encode($data);
}

?>