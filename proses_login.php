<?php
session_start();

$valid_user = "admin";
$valid_pass = "1234";

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == $valid_user && $pass == $valid_pass){
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
} else {
    header("Location: index.php?error=1");
}
?>