<?php
require_once "../config/dbConfig.php";

// Handle delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM booking_form WHERE id = $id");
    header("Location: admin_booking_manage.php");
    exit;
}

// Handle update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $created_at = date('Y-m-d H:i:s'); // current datetime

    $query = "UPDATE booking_form SET 
                name='$name', email='$email', phone='$phone', address='$address',
                location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving' 
              WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: admin_booking_manage.php");
    exit;
}

$bookingList = mysqli_query($conn, "SELECT * FROM booking_form ORDER BY created_at DESC");

// Edit form
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editQuery = mysqli_query($conn, "SELECT * FROM booking_form WHERE id = $id");
    $editData = mysqli_fetch_assoc($editQuery);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Bookings</title>
    <link rel="stylesheet" href="../admin/bookingManage.css">
</head>
<body>
<div class="container">
    <h2> Booking Management</h2>

    <?php if ($editData): ?>
    <div class="form-section">
        <h3>Edit Booking (ID: <?= $editData['id'] ?>)</h3>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($editData['name']) ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($editData['email']) ?>" required>

            <label>Phone:</label>
            <input type="text" name="phone" value="<?= htmlspecialchars($editData['phone']) ?>" required>

            <label>Address:</label>
            <input type="text" name="address" value="<?= htmlspecialchars($editData['address']) ?>" required>

            <label>Location:</label>
            <input type="text" name="location" value="<?= htmlspecialchars($editData['location']) ?>" required>

            <label>Guests:</label>
            <input type="number" name="guests" value="<?= $editData['guests'] ?>" required>

            <label>Arrivals:</label>
            <input type="date" name="arrivals" value="<?= $editData['arrivals'] ?>" required>

            <label>Leaving:</label>
            <input type="date" name="leaving" value="<?= $editData['leaving'] ?>" required>

            <button type="submit" name="update">Update Booking</button>
        </form>
    </div>
    <?php endif; ?>

    <h3>All Bookings</h3>
    <div class="table-container">
    <table>
        <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
            <th>Location</th><th>Guests</th><th>Arrivals</th><th>Leaving</th><th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($bookingList)) : ?>
            <tr>
                <td data-label="ID"><?= $row['id'] ?></td>
                <td data-label="Name"><?= htmlspecialchars($row['name']) ?></td>
                <td data-label="Email"><?= htmlspecialchars($row['email']) ?></td>
                <td data-label="Phone"><?= htmlspecialchars($row['phone']) ?></td>
                <td data-label="Address"><?= htmlspecialchars($row['address']) ?></td>
                <td data-label="Location"><?= htmlspecialchars($row['location']) ?></td>
                <td data-label="Guests"><?= $row['guests'] ?></td>
                <td data-label="Arrivals"><?= $row['arrivals'] ?></td>
                <td data-label="Leaving"><?= $row['leaving'] ?></td>
                <td data-label="Actions">
                    <a href="?edit=<?= $row['id'] ?>" class="edit-btn">Edit</a>
                    <a href="?delete=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Delete this booking?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
