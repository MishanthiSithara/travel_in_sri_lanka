<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome, Admin</h2>
<a href="manage_booking.php">Manage Bookings</a><br>
<a href="logout.php">Logout</a>
