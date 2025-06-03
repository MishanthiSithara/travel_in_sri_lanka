<?php
session_start();
include '../config/dbConfig.php';

// Form submission check
if (isset($_POST['send'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $location = $_POST['location']; // Could be used to identify package
    $guests   = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving  = $_POST['leaving'];
    
    $booking_date = date('Y-m-d'); // Current date
    $status = 'pending';

    // Handle user ID (optional: lookup or create user)
    $user_id = 1; // Replace with actual logged-in user ID if you have authentication

    // Lookup package ID based on location (optional)
    $stmt = $conn->prepare("SELECT id FROM add_package WHERE location = ?");
    $stmt->bind_param("s", $location);
    $stmt->execute();
    $result = $stmt->get_result();
    $package_id = $result->num_rows > 0 ? $result->fetch_assoc()['id'] : null;
    $stmt->close();

    if ($package_id !== null) {
        $stmt = $conn->prepare("INSERT INTO booking (user_id, package_id, booking_date, travel_date, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $user_id, $package_id, $booking_date, $arrivals, $status);
        $stmt->execute();
        $stmt->close();
        $_SESSION['message'] = "Booking submitted successfully!";
    } else {
        $_SESSION['message'] = "No matching package found for location: $location";
    }

    header("Location: ../book.php");
    exit();
}
?>
