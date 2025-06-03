<?php
include '../config/dbConfig.php';
session_start();

// Fetch all bookings
$query = "SELECT b.id, u.name AS user_name, p.title AS package_title, b.booking_date, b.travel_date, b.status
          FROM booking b
          JOIN users u ON b.user_id = u.id
          JOIN add_package p ON b.package_id = p.id";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Bookings</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <h2>Admin - Manage Bookings</h2>

  <table border="1" cellpadding="10">
    <thead>
      <tr>
        <th>User</th>
        <th>Package</th>
        <th>Booking Date</th>
        <th>Travel Date</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?= $row['user_name'] ?></td>
          <td><?= $row['package_title'] ?></td>
          <td><?= $row['booking_date'] ?></td>
          <td><?= $row['travel_date'] ?></td>
          <td><?= $row['status'] ?></td>
          <td>
            <form action="../handlers/update_booking_status.php" method="post" style="display:inline;">
              <input type="hidden" name="booking_id" value="<?= $row['id'] ?>">
              <select name="status">
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
              </select>
              <button type="submit">Update</button>
            </form>
            <form action="../handlers/delete_booking.php" method="post" style="display:inline;">
              <input type="hidden" name="booking_id" value="<?= $row['id'] ?>">
              <button type="submit" onclick="return confirm('Delete this booking?')">Delete</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
