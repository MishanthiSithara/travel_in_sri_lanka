<?php
include '../config/dbConfig.php';

if (isset($_POST['id']) && isset($_POST['image_path'])) {
    $id = $_POST['id'];
    $image_path = $_POST['image_path'];
    $file = "../uploads" . $image_path;

    // Delete file
    if (file_exists($file)) {
        unlink($file);
    }

    // Delete DB record
    $stmt = $conn->prepare("DELETE FROM package_images WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: ../admin/package_image.php");
exit();
