<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .gallery-container { display: flex; flex-wrap: wrap; gap: 16px; }
        .gallery-item { border: 1px solid #ccc; padding: 8px; border-radius: 6px; width: 180px; text-align: center; }
        .gallery-item img { width: 100%; height: 120px; object-fit: cover; border-radius: 4px; }
        .add-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
        .add-btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Gallery Management</h1>
    
    <a href="#" class="add-btn">Add Image</a>

    <div class="gallery-container">
        <div class="gallery-item">
            <img src="https://placehold.co/300x200?text=Image+1" alt="Gallery Image 1">
            <div>Image 1</div>
        </div>
        <div class="gallery-item">
            <img src="https://placehold.co/300x200?text=Image+2" alt="Gallery Image 2">
            <div>Image 2</div>
        </div>
        <div class="gallery-item">
            <img src="https://placehold.co/300x200?text=Image+3" alt="Gallery Image 3">
            <div>Image 3</div>
        </div>
        <!-- Add more gallery items as needed -->
    </div>
</body>
</html>