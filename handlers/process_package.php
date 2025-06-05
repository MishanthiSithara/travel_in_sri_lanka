<?php

require_once "../config/dbConfig.php";

$title = $_POST['title']; 
$description = $_POST["description"];
$price = $_POST["price"];
$duration = $_POST['duration'];
$location = $_POST['location'];
$image_name = $_FILES['image_path']['name'];

// Handle file upload
$target_dir = "../images/";
$target_file = $target_dir . basename($image_name);
if (move_uploaded_file($_FILES['image_path']['tmp_name'], $target_file)) {
  // Only store the image name in the database
} else {
  echo "Sorry, there was an error uploading your file.";
  exit;
}

// Add only image name to the INSERT statement
$sql = "INSERT INTO packages (`title`, `description`, `price`, `duration`, `location`, `image_path`)
VALUES ('$title', '$description', '$price', '$duration', '$location', '$image_name')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Package submitted successfully'); window.location.href = '../admin/addPackages.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
