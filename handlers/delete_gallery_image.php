<?php
include './config/dbConfig.php';

if (isset($_POST['id']) && isset($_POST['image_path'])) {
    $id = $_POST['id'];
    $image_path = $_POST['image_path'];
    $file = "../uploads/" . $image_path;

    // Delete image file
    if (file_exists($file)) {
        unlink($file);
    }

    // Delete from database
    $stmt = $conn->prepare("DELETE FROM gallery_image WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: ../gallery_image_add.php");
exit();
