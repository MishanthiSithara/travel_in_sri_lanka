<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Handle add and delete logic...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $conn->query("INSERT INTO packages (name, description, price) VALUES ('$name', '$desc', '$price')");
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $conn->query("DELETE FROM packages WHERE id = $id");
    }
}

$packages = $conn->query("SELECT * FROM packages");
?>

<h3>Manage Packages</h3>
<form method="POST">
    <input type="text" name="name" placeholder="Package Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" name="price" placeholder="Price" step="0.01" required>
    <button type="submit" name="add">Add Package</button>
</form>

<h3>Existing Packages</h3>
<ul>
<?php while ($row = $packages->fetch_assoc()): ?>
    <li><?= $row['name'] ?> - $<?= $row['price'] ?>
        <form method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="delete">Delete</button>
        </form>
    </li>
<?php endwhile; ?>
</ul>
