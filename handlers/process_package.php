<?php

require_once "../config/dbConfig.php";

$title = $_POST['title']; 
$description = $_POST["description"];
$price = $_POST["price"];
$duration = $_POST['duration'];
$location = $_POST['location'];


    $sql = "INSERT INTO packages (`title`, `description`, `price`, `duration`, `location`)
VALUES ('$title', '$description', '$price', '$duration', '$location')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
