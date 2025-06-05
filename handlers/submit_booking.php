<?php

require_once "../config/dbConfig.php";

// Get POST data
$pakage_id = $_POST['package_id'];
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
        (`name`, `pakage_id`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `created_at`)
        VALUES 
        ('$name', '$pakage_id', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$created_at')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Booking submitted successfully'); window.location.href = '../home.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
