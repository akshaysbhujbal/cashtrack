<?php
session_start();


// MODIFY these settings for your server
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; // set if your MySQL has password
$db_name = 'cashtrack';


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
die('Database connection failed: ' . $mysqli->connect_error);
}


function is_logged_in() {
return isset($_SESSION['user_id']);
}


function require_login() {
if (!is_logged_in()) {
header('Location: index.php');
exit;
}
}


?>