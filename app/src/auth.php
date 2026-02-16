<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
$secret = require_once("secret.php");
$conn = require_once __DIR__ . "/database.php";
$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password);

$result = pg_query_params($conn,"SELECT * FROM users WHERE username= $1 AND password=$2",[$username,$password_hash]);
$user = pg_fetch_assoc($result);

if($user){
    $payload = [
        'user_id'=> $user['id'],
        'username'=> $user['username'],
        'role'=> $user['role']
    ];
    $jwt = JWT::encode($payload,$secret,'HS256');
    setcookie('bangutoken',$jwt,time()+3600,'/');
    header('Location: /dashboard.php');
    exit;
}
else{
    return "Invalid credentials";
}



?>