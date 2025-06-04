<?php

require_once "../config/dbConfig.php";

// Get POST data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Insert query
$sql = "INSERT INTO feedback (`name`, `email`, `feedback`)
        VALUES ('$name', '$email', '$feedback')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Feedback submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

