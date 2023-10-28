<?php

$server_name = "localhost";
$user_name = "root";
$user_password = '';
$database_name = "login_user";

$con = mysqli_connect($server_name, $user_name, $user_password, $database_name);

if (!$con){
    die ('Connection Failed:' .mysql_error());
}

?>

