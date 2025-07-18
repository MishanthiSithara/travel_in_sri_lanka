<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about</title>

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
      style="background: url(image/mirissa.jpg) no-repeat"
    >
      <h1>about us</h1>
    </div>

    <!--about section starts-->

    <section class="about">
      <div class="image">
        <img src="image/about-img.jpg" alt="" />
      </div>
      <div class="content">
        <h3>why choose us?</h3>
        <p>
          At our TravelA+ website, we offer exciting travel packages with visits
          to the best destinations, all at amazing discounts of up to 50%! We
          provide everything you need for a perfect trip — With our commitment
          to great service and unforgettable adventures, choosing us means
          choosing a journey filled with comfort, fun, and lasting memories.
        </p>

        <div class="icons-container">
          <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destination</span>
          </div>

          <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
          </div>

          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
          </div>

          <div class="icons">
            <i class="fas fa-hotel"></i>
            <span>accommodation facilities</span>
          </div>

          <div class="icons">
            <i class="fas fa-utensils"></i>
            <span>food and drink</span>
          </div>

          <div class="icons">
            <i class="fas fa-fire"></i>
            <span>camp fire</span>
          </div>
        </div>
      </div>
    </section>

    <!--about section ends-->

    <!--about reviews section starts-->

    <section class="reviews">
      <h1 class="heading-title">clients reviews</h1>
      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "A once-in-a-lifetime experience!" I can’t thank the team enough
              for organizing such a beautiful trip around Sri Lanka. From the
              ancient temples in Anuradhapura to the serene beaches in Mirissa,
              everything was seamless and stress-free. Highly recommended for
              anyone visiting the island!
            </p>
            <h3>Thisar .TD , United Kingdom</h3>
            <span>traveler</span>
            <img src="image/thisar.jpeg" alt="" />
          </div>

          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "Local expertise made all the difference." Traveling with a
              company that truly knows the island was the best decision. Our
              guide was knowledgeable, friendly, and always went the extra mile.
              We discovered hidden gems we would’ve never found on our own!
            </p>
            <h3>Shana , Australia</h3>
            <span>traveler</span>
            <img src="image/Shana.jpeg" alt="" />
          </div>

          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "Safe, smooth, and unforgettable." As a solo traveler, I was a bit
              nervous, but the team made me feel welcome and secure from day
              one. Every detail was perfectly planned, and I left with amazing
              memories and new friends.
            </p>
            <h3>Lum shafar , India</h3>
            <span>traveler</span>
            <img src="image/shafar.jpeg" alt="" />
          </div>

          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "Highly professional and friendly." From the first email to the
              last day of the trip, the service was excellent. We felt safe and
              cared for the whole time.
            </p>
            <h3>aisha sufi , UAE</h3>
            <span>traveler</span>
            <img src="image/sufi.jpeg" alt="" />
          </div>

          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "Amazing experience! The booking was easy and everything went
              smoothly. Highly recommend,Excellent service and beautiful
              destinations.I’ll definitely book again!"
            </p>
            <h3>amir , India</h3>
            <span>traveler</span>
            <img src="image/amir.jpeg" alt="" />
          </div>

          <div class="swiper-slide slide">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              "Amazing local knowledge." We got to explore places we’d never
              have found on our own. The guides were kind and incredibly
              informative.
            </p>
            <h3>Shana , France</h3>
            <span>traveler</span>
            <img src="image/kahira.jpeg" alt="" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!--reviews section ends-->

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
