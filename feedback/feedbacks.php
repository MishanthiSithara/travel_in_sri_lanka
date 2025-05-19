


<?php

//Admin Feedback Viewer//

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../admin/login.php");
    exit;
}

include '../includes/db.php';
$feedbacks = $conn->query("SELECT * FROM feedback ORDER BY submitted_at DESC");
?>

<h2>All Feedback</h2>
<ul>
    <?php while ($fb = $feedbacks->fetch_assoc()): ?>
        <li>
            <strong><?= htmlspecialchars($fb['name']) ?> (<?= $fb['email'] ?>)</strong><br>
            <?= nl2br(htmlspecialchars($fb['message'])) ?><br>
            <small><?= $fb['submitted_at'] ?></small>
            <hr>
        </li>
    <?php endwhile; ?>
</ul>

