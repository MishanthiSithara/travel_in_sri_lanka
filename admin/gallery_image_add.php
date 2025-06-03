<?php include '../config/dbConfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gallery Image Upload</title>
    <style>
        .gallery { display: flex; flex-wrap: wrap; gap: 20px; }
        .image-box { text-align: center; border: 1px solid #ccc; padding: 10px; }
        img { max-width: 200px; height: auto; display: block; margin: auto; }
    </style>
</head>
<body>

<h2>Upload Image to Gallery</h2>
<form action="../handlers/upload_gallery_image.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*" required><br><br>
    <button type="submit">Upload</button>
</form>

<hr>

<h2>Gallery</h2>
<div class="gallery">
<?php
$result = $conn->query("SELECT * FROM gallery_image ORDER BY uploaded_at DESC");
while ($row = $result->fetch_assoc()) {
    echo "<div class='image-box'>
            <img src='uploads/{$row['image_path']}' alt='Image'>
            <p>Uploaded: {$row['uploaded_at']}</p>
            <form action='../handlers/delete_gallery_image.php' method='POST' onsubmit=\"return confirm('Delete this image?');\">
                <input type='hidden' name='id' value='{$row['id']}'>
                <input type='hidden' name='image_path' value='{$row['image_path']}'>
                <button type='submit'>Delete</button>
            </form>
          </div>";
}
?>
</div>

</body>
</html>
