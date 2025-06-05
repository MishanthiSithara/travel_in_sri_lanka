<?php
require_once "../config/dbConfig.php";

// Handle delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM feedback WHERE id = $id");
    header("Location: feedback_manage.php");
    exit;
}


// Handle update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    mysqli_query($conn, "UPDATE feedback SET name='$name', email='$email', feedback='$feedback' WHERE id=$id");
    header("Location: feedback_manage.php");
    exit;
}

// Load feedback list
$feedbackList = mysqli_query($conn, "SELECT * FROM feedback ORDER BY created_at DESC");

// If editing
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editQuery = mysqli_query($conn, "SELECT * FROM feedback WHERE id = $id");
    $editData = mysqli_fetch_assoc($editQuery);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Feedback Management</title>
    <link rel="stylesheet" href="../admin/feedbackManage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <h2>Feedback Management</h2>

    <?php if ($editData): ?>
        <div class="form-section">
            <h3>Edit Feedback (ID: <?= $editData['id'] ?>)</h3>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $editData['id'] ?>">

                <label>Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($editData['name']) ?>" required>

                <label>Email:</label>
                <input type="email" name="email" value="<?= htmlspecialchars($editData['email']) ?>" required>

                <label>Feedback:</label>
                <textarea name="feedback" rows="4" required><?= htmlspecialchars($editData['feedback']) ?></textarea>

                <button type="submit" name="update">Update Feedback</button>
            </form>
        </div>
    <?php endif; ?>

    <h3>All Feedback</h3>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($feedbackList)) : ?>
            <tr>
                <td data-label="ID"><?= $row['id'] ?></td>
                <td data-label="Name"><?= htmlspecialchars($row['name']) ?></td>
                <td data-label="Email"><?= htmlspecialchars($row['email']) ?></td>
                <td data-label="Feedback"><?= htmlspecialchars($row['feedback']) ?></td>
                <td data-label="Created At"><?= $row['created_at'] ?></td>
                <td data-label="Actions">
                    <a href="?edit=<?= $row['id'] ?>" class="edit-btn">Edit</a>
                    <a href="?delete=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Delete this feedback?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<a href="dashboard.php" class="dashboard-btn">← Back to Dashboard</a>
</body>
</html>
