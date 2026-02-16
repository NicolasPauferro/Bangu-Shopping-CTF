<?php
$conn_to_list_user = require_once __DIR__ . "/database.php";
$result = false;
if(isset($_GET['action']) && $_GET['action']=='add' && isset($_GET['username']) && isset($_GET['password'])){
        $username_to_adduser = $_GET['username'];
        $password_to_adduser = md5($_GET['password']);
        $role_to_adduser = 'user';
        $query_to_add_user = "INSERT INTO users(username,password,role) VALUES ($1,$2,$3)";
        $result = pg_query_params($conn_to_list_user,$query_to_add_user,[$username_to_adduser,$password_to_adduser,$role_to_adduser]);  
    }

    $query_to_list_user = "SELECT * FROM users";
    $result_of_listing = pg_query($conn_to_list_user,$query_to_list_user);
    $users_listed = pg_fetch_all($result_of_listing);
    foreach($users_listed as $user){
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['username']}</td>";
        echo "<td>{$user['role']}</td>";
        echo "</tr>";
    }
    

if($result){
    echo "User added successfully!";
}elseif(!$result && isset($_GET['action']) && $_GET['action']=='add'){
    echo "Failed to add user!";
}


?>