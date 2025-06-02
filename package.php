<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>package</title>

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
      class="heading-package"
      style="background: url(image/holly_barber_nuwaraEliya_2_sm.jpg) no-repeat"
    >
      <h1>top destination</h1>
    </div>

    <!--package section starts-->

    <section class="packages">
      <div class="box-container">
        <div class="box">
          <div class="images">
            <img src="image/Gregory-Lake.jpg" alt="" />
          </div>
          <div class="content">
            <h3>NuwaraEliya</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>

          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/kandy1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>kandy</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$250</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/Nine-Arches-Bridge.jpg" alt="" />
          </div>
          <div class="content">
            <h3>badulla</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$400</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/sigiriya2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>sigiriya</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$400</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/194n.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Anuradhapura</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/Gal-Viharaya.jpg" alt="" />
          </div>
          <div class="content">
            <h3>polonnaruwa</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$400</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/colombo1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>colombo</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$400</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/galle2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>galle</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="./image/gallery/gal164.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>jaffna</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$400</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/trinco1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>trincomali</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/gampola1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>gampola</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$350</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="images">
            <img src="image/pasikuda1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>batticaloa</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$350</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>
      </div>
    
    </section>

    <!--package section ends-->

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
