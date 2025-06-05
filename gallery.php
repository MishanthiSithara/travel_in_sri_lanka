<?php
session_start();
require_once './config/dbConfig.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>gallery</title>

    <!--swiper css link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!--font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <!--external css link-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--header section starts-->
    <?php
       include_once "./components/nav.php"
       ?>

    <!--header section end-->

    <div
      class="heading-about"
      style="background: url(image/man-with-camera.jpg) no-repeat"
    >
      <h1>gallery</h1>
    </div>

    <!--gallery start-->

    <h3>our Photo Gallery</h3>

    <div class="gallery">
      <?php
      // Fetch images from database
      $sql = "SELECT * FROM gallery_image ORDER BY uploaded_at DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<img src="' . $row["image_path"] . '" alt="Gallery Image" />';
          }
      } else {
          echo '<p>No images found in the gallery.</p>';
      }
      ?>
    </div>

    <!--gallery end-->

    <!--footer section starts-->

    <?php
       include_once "./components/footer.php"
       ?>

    <!--footer section ends-->

    <!--swiper js file link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--js file link-->
    <script src="js/script.js"></script>
  </body>
</html>
