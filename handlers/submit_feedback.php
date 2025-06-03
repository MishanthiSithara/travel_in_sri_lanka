<?php
require_once "../config/dbConfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Since your form only has name, email, and feedback,
    // you need to map these or modify accordingly.

    // For now, assign dummy/fixed user_id, package_id and rating,
    // You can later replace with real logged-in user info or form inputs

    $user_id = 1;          // Replace with real user ID (from session after login)
    $package_id = 1; // Change this to a valid ID from the packages table
    $rating = 5;           // Default rating or could come from a form input
    $comment = $_POST['feedback'] ?? '';

    // Basic validation
    if (empty($comment)) {
        echo "Feedback comment is required.";
        exit;
    }

    $sql = "INSERT INTO feedback (user_id, package_id, rating, comment, created_at)
            VALUES (?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("iiis", $user_id, $package_id, $rating, $comment);

    if ($stmt->execute()) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Invalid request method.";
}
?>
