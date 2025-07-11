<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Travel Package</title>
  <link rel="stylesheet" href="add_package.css">
</head>
<body>
  <div class="container">
    <h2>Add New Travel Package</h2>
    <form action="../handlers/process_package.php" method="POST" enctype="multipart/form-data">
      <label for="title">Package Title</label>
      <input type="text" id="title" name="title" required>

      <label for="description">Description</label>
      <textarea id="description" name="description" rows="4" required></textarea>

      <label for="price">Price (USD)</label>
      <input type="number" id="price" name="price" step="0.01" required>

      <label for="duration">Duration</label>
      <input type="text" id="duration" name="duration" required placeholder="e.g., 5 Days / 4 Nights">

      <label for="location">Location</label>
      <input type="text" id="location" name="location" required>

      <label for="image_path">Add Image</label>
      <input type="file" id="image_path" name="image_path" accept="image/*" required>

      <div class="buttons">
        <button type="submit" name="pkgSubmit" class="submit-btn">Add Package</button>
        <a href="../admin/dashboard.php" class="cancel-btn">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>


