<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

    <!--home section stars-->
    <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide slide"
            style="background: url(image/badulla1.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>travel in sri lanka</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(image/main_heading_img1.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>discover the new places</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(image/sigiriya5.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>make your tour worthwhile</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!--home section end-->

    <!--service section start-->
    <section class="services">
      <h1 class="heading-title">our services</h1>
      <div class="box-container">
        <div class="box">
          <img src="image/acco-icon-1.png" alt="" />
          <h3>accommodation facilities</h3>
        </div>

        <div class="box">
          <img src="image/food-icon.png" alt="" />
          <h3>food and drink</h3>
        </div>

        <div class="box">
          <img src="image/transport.png" alt="" />
          <h3>transporation</h3>
        </div>

        <div class="box">
          <img src="image/tour-guide.png" alt="" />
          <h3>tour guide</h3>
        </div>

        <div class="box">
          <img src="image/camp-fire.png" alt="" />
          <h3>camp fire</h3>
        </div>
      </div>
    </section>
    <!--service section end-->

    <!--home about section starts-->
    <section class="home-about">
      <div class="image">
        <img src="image/about-img.jpg" alt="" />
      </div>

      <div class="content">
        <h3>about us</h3>
        <p>
          Welcome to your gateway to discovering the wonders of Sri Lanka! We
          are a passionate team of local travel experts dedicated to crafting
          unforgettable journeys across the island. Whether you're seeking
          golden beaches, misty mountains, ancient ruins, or wildlife
          adventures, our customized travel packages offer something for every
          traveler. With years of experience and insider knowledge, we ensure a
          smooth, safe and enriching experience from booking to return. Let us
          help you explore the beauty, culture, and heart of Sri Lanka.
        </p>
        <a href="about.php" class="btn">read more</a>
      </div>
    </section>
    <!--home about section end-->

    <!--home package section starts-->

    <section class="home-packages">
      <h1 class="heading-title">our packages</h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
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
          <div class="image">
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
          <div class="image">
            <img src="image/Nine-Arches-Bridge.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Badulla</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="image/sigiriya2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>sigiriya</h3>
            <p>This package offers the opportunity to visit more locations!</p>
            <p class="price">$450</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>
      </div>

      <div class="load-more">
        <a href="package.php" class="btn">load more</a>
      </div>
    </section>

    <!--home package section ends-->

    <!--home offer section starts-->

    <section class="home-offer">
      <div class="content">
        <h3>upto 50% off</h3>
        <p>
          Discover your next adventure with us! Enjoy up to 50% off on amazing
          travel packages to breathtaking destinations. Whether you're seeking
          relaxation, adventure, or cultural experiences, we have the perfect
          trip waiting for you. Book now and make unforgettable memories — for
          half the price!
        </p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </section>

    <!--home offer section ends-->

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
