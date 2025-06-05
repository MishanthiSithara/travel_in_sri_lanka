<?php
session_start();

require_once "../config/dbConfig.php";

if (!isset($_SESSION["role"])) {
    // Redirect to login page or deny access
    header("Location: ../login.php");
    exit();
}

if ($_SESSION["role"] == 'user') {
    header("Location: ../home.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - Travel Agency</title>
  <link rel="stylesheet" href="./style_admin.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
  <div class="dashboard-container">
    <aside class="sidebar">
      <h2>Travel Admin</h2>
      <nav>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="../admin/booking_manage.php">Manage Bookings</a></li>
          <li><a href="../admin/addPackages.php">Add Packages</a></li>
          <li><a href="../admin/package_image.php">Add Package Image</a></li>
          <li><a href="../admin/gallery_manage.php">Gallery</a></li>
          <li><a href="../admin/feedback_manage.php">Manage Feedback</a></li>
           <li><a href="../home.php">Home</a></li>
          <li><a href="../logout.php">Logout</a></li>
          
        </ul>
      </nav>
    </aside>

    <main class="main-content">
      <header class="topbar">
        <h1>Dashboard</h1>
        <div class="user">
  <span>Admin</span>
  <i class="fas fa-user-circle user-icon"></i>
           </div>
      </header>

      <section class="cards">
        <div class="card">
          <h3>Total Bookings</h3>
          <p>
            <?php
              $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM booking_form");
              if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo $row['total'];
              } else {
                echo "0";
              }
        ?>
          </p>
        </div>
        <div class="card">
          <h3>Packages</h3>
          <p>
            <?php
              $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM packages");
              if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo $row['total'];
              } else {
                echo "0";
              }
            ?>
          </p>
        </div>
        <div class="card">
          <h3>Gallery Images</h3>
          <p>
            <?php
            $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM gallery_image");
              if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo $row['total'];
              } else {
                echo "0";
              }
            ?>
          </p>
      </section>
    </main>
  </div>
</body>
</html>
