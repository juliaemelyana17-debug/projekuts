<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
$error = isset($_GET['error']) ? "Username atau password salah!" : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>POLGAN MART - Login</title>
    <style>
        body { font-family: Arial; background:#f0f0f0; }
        .card { width:300px; background:#fff; padding:20px; margin:50px auto; border-radius:8px; }
        input { width:100%; padding:8px; margin:5px 0; }
        button { width:100%; padding:10px; margin-top:10px; background:blue; color:white; }
        .error { background:#ffcccc; padding:10px; margin-bottom:10px; text-align:center; }
    </style>
</head>
<body>
<div class="card">
    <h3 style="text-align:center;">POLGAN MART</h3>

    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="login_process.php">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
        <a href="index.php"><button type="button">Batal</button></a>
    </form>
</div>
</body>
</html>