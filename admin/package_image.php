<?php include '../config/dbConfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Package Images</title>
    <style>
        .gallery { display: flex; flex-wrap: wrap; gap: 20px; }
        .image-box { border: 1px solid #ccc; padding: 10px; text-align: center; }
        img { width: 200px; height: auto; display: block; margin: auto; }
    </style>
</head>
<body>

<h2>Upload Package Image</h2>
<form action="../handlers/upload_package_image.php" method="POST" enctype="multipart/form-data">
    <label>Select Package:</label>
    <select name="package_id" required>
        <?php
        $result = $conn->query("SELECT id, title FROM add_package");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['title']}</option>";
        }
        ?>
    </select><br><br>

    <input type="file" name="image" accept="image/*" required><br><br>
    <button type="submit">Upload Image</button>
</form>

<hr>

<h2>Uploaded Images</h2>
<div class="gallery">
<?php
$res = $conn->query("SELECT package_images.id, package_images.image_path, add_package.title 
                     FROM package_images 
                     JOIN add_package ON package_images.package_id = add_package.id");
while ($img = $res->fetch_assoc()) {
    echo "<div class='image-box'>
            <strong>{$img['title']}</strong><br>
            <img src='uploads/{$img['image_path']}'><br>
            <form method='POST' action='../handlers/delete_package_image.php' onsubmit=\"return confirm('Delete this image?');\">
                <input type='hidden' name='id' value='{$img['id']}'>
                <input type='hidden' name='image_path' value='{$img['image_path']}'>
                <button type='submit'>Delete</button>
            </form>
          </div>";
}
?>
</div>

</body>
</html>