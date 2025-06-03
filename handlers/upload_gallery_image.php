<?php
include '../config/dbConfig.php';

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $filename = basename($_FILES['image']['name']);
    $uploadDir = "../uploads/";
    $uploadPath = $uploadDir . $filename;

    // Avoid overwriting existing files
    $i = 1;
    while (file_exists($uploadPath)) {
        $filename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME) . "_$i." . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $uploadPath = $uploadDir . $filename;
        $i++;
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
        $stmt = $conn->prepare("INSERT INTO gallery_image (image_path) VALUES (?)");
        $stmt->bind_param("s", $filename);
        $stmt->execute();
        $stmt->close();
    }
}

header("Location: ../admin/gallery_image_add.php");
exit();
