<?php
include '../config/dbConfig.php';

if (isset($_POST['package_id']) && isset($_FILES['image'])) {
    $package_id = $_POST['package_id'];
    $image = $_FILES['image'];

    if ($image['error'] === UPLOAD_ERR_OK) {
        $filename = basename($image['name']);
        $uploadDir = "../uploads/";
        $uploadPath = $uploadDir . $filename;

        // Prevent file overwrite
        $i = 1;
        while (file_exists($uploadPath)) {
            $filename = pathinfo($image['name'], PATHINFO_FILENAME) . "_$i." . pathinfo($image['name'], PATHINFO_EXTENSION);
            $uploadPath = $uploadDir . $filename;
            $i++;
        }

        if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
            $stmt = $conn->prepare("INSERT INTO package_images (package_id, image_path) VALUES (?, ?)");
            $stmt->bind_param("is", $package_id, $filename);
            $stmt->execute();
            $stmt->close();
        }
    }
}

header("Location: ../admin/package_image.php");
exit();
