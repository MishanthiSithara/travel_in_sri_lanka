<?php
include '../includes/db.php';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $message = "Registration successful.";
    } else {
        $message = "Registration failed.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <input type="email" name="email" required placeholder="email">
    <input type="confirm password" name="confirm password" required placeholder="confirm Password">

    <button type="submit">Register</button>
    <p><?= $message ?></p>
    <p>Already have an account? <a href="login.php">Sign in</a></p>
</form>
