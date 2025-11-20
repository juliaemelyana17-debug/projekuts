<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Data login statis
$validUser = "admin";
$validPass = "1234";

// Cek kecocokan
if ($username === $validUser && $password === $validPass) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "Dosen";

    header("Location: dashboard.php");
    exit;
} else {
    header("Location: index.php?error=1");
    exit;
}