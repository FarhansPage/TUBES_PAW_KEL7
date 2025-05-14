<?php
session_start();

$validUsername = 'admin';
$plainPassword = 'admin123';

$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUser = $_POST['username'];
    $inputPass = $_POST['password'];

    if ($inputUser === $validUsername && password_verify($inputPass, $hashedPassword)) {
        $_SESSION['user'] = $validUsername;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login TelUEve</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login ke TelUEve</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>