<?php
$userflag = require_once __DIR__ . "/userflag.php";
$adminflag = require_once __DIR__ . "/adminflag.php";
if (!isset($_COOKIE['bangutoken'])) {
    header("Location: /login.php");
    exit;
}
$secret = require_once("secret.php");
$jwt = $_COOKIE['bangutoken'];
$parts = explode('.',$jwt);
$header = json_decode(base64_decode($parts[0]), true);
$payload = json_decode(base64_decode($parts[1]), true);
$signature = $parts[2];

#$decode = JWT::decode($jwt, new Key($secret, 'HS256'));
#this would be the secure version
$user_id = $payload['user_id'];
$username = $payload['username'];
$role = $payload['role'];
if($role=="user"){
    return $userflag;
}
elseif($role=="admin"){
    return $adminflag;
}
?>