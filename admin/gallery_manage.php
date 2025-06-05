<?php
require_once('../config/dbConfig.php');

// Handle delete request
if (isset($_POST['delete_image'])) {
    $imageId = $_POST['image_id'];
    
    // Get image path before deleting record
    $sql = "SELECT image_path FROM gallery_image WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $imageId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $imagePath = "../" . $row['image_path'];
        // Delete the physical file
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        
        // Delete from database
        $sql = "DELETE FROM gallery_image WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $imageId);
        
        if ($stmt->execute()) {
            echo "<script>alert('Image deleted successfully!');</script>";
        } else {
            echo "<script>alert('Error deleting image from database.');</script>";
        }
    }
    $stmt->close();
}

// Handle file upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imageFile"])) {
    $targetDir = "../uploads/gallery/";
    
    // Create directory if it doesn't exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    
    $timestamp = time();
    $fileExtension = strtolower(pathinfo($_FILES["imageFile"]["name"], PATHINFO_EXTENSION));
    $newFileName = "gallery_" . $timestamp . "." . $fileExtension;
    $targetFile = $targetDir . $newFileName;
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["imageFile"]["tmp_name"]);
    if ($check !== false) {
        // Allow certain file formats
        if ($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif") {
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
                // Insert into database
                $imagePath = "uploads/gallery/" . $newFileName;
                $uploadedAt = date("Y-m-d H:i:s");
                
                $sql = "INSERT INTO gallery_image (image_path, uploaded_at) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $imagePath, $uploadedAt);
                
                if ($stmt->execute()) {
                    echo "<script>alert('Image uploaded successfully!');</script>";
                } else {
                    echo "<script>alert('Sorry, there was an error uploading your file to database.');</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        } else {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        }
    } else {
        echo "<script>alert('File is not an image.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Management</title>    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .gallery-container { display: flex; flex-wrap: wrap; gap: 16px; }
        .gallery-item { border: 1px solid #ccc; padding: 8px; border-radius: 6px; width: 180px; text-align: center; }
        .gallery-item img { width: 100%; height: 120px; object-fit: cover; border-radius: 4px; }
        .gallery-item .date { margin: 8px 0; color: #666; }
        .add-btn, .delete-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 8px 16px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .add-btn:hover { background: #0056b3; }
        .delete-btn {
            background: #dc3545;
            margin: 5px 0;
        }
        .delete-btn:hover { background: #c82333; }
    

    </style>
</head>
<body>
    <h1>Gallery Management</h1>
    <a href="../home.php" class="add-btn" style="background:rgb(41, 62, 198); margin-left: 10px;">Home</a>


    <a href="#" class="add-btn" onclick="document.getElementById('addImageForm').style.display='block';return false;">Add Image</a>
    

    <form id="addImageForm" action="gallery_manage.php" method="post" enctype="multipart/form-data" style="display:none; margin-bottom:20px; border:1px solid #ccc; padding:16px; border-radius:8px; width:350px;">
        <h3>Add New Image</h3>
        <label for="imageFile">Select Image:</label><br>
        <input type="file" id="imageFile" name="imageFile" accept="image/*" required style="margin-bottom:10px;"><br>
        <button type="submit" class="add-btn" style="margin-right:10px;">Upload</button>
        <button type="button" class="add-btn" style="background:#6c757d;" onclick="document.getElementById('addImageForm').style.display='none';">Cancel</button>
    </form>

    <div class="gallery-container">
        <?php
        // Fetch images from database
        $sql = "SELECT * FROM gallery_image ORDER BY uploaded_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="gallery-item">';
                echo '<img src="../' . $row["image_path"] . '" alt="Gallery Image">';
                echo '<div>' . date('M d, Y', strtotime($row["uploaded_at"])) . '</div>';
                echo '<form action="gallery_manage.php" method="post" style="display:inline-block; margin-top:8px;">';
                echo '<input type="hidden" name="image_id" value="' . $row["id"] . '">';
                echo '<button type="submit" name="delete_image" class="add-btn" style="background:#dc3545;">Delete</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<p>No images found in the gallery.</p>';
        }
        ?>
    </div>
</body>
</html>