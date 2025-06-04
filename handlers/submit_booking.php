<?php

require_once "../config/dbConfig.php";

// Get POST data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];
$created_at = date('Y-m-d H:i:s'); // current datetime

// Insert query
$sql = "INSERT INTO booking_form 
        (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `created_at`)
        VALUES 
        ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$created_at')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Booking submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
