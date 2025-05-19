<?php

//Feedback Form Page

$success = $_GET['success'] ?? '';
$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h2>Send Us Your Feedback</h2>

    <?php if ($success): ?>
        <p class="success">Thank you for your feedback!</p>
    <?php elseif ($error): ?>
        <p class="error">Failed to send feedback. Please try again.</p>
    <?php endif; ?>

    <form action="save_feedback.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Feedback" rows="5" required></textarea>
        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>
