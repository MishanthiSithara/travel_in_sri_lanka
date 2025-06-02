<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>our services</title>

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
      style="background: url(image/services2.jpg) no-repeat"
    >
      <h1>our services</h1>
    </div>

    <!--service section starts-->

    <div class="service-our">
      <div class="our_service">
        <h3>Accommodation Facilities</h3>
        <img src="./image/nuwaraeliya_hotel.jpg" alt="" />
        <img src="./image/nuwaraeliya_hotel3.png" alt="" />
        <img src="./image/nuwaraeliya_hotel2.png" alt="" />
        <img src="./image/nuwaraeliya_hotel4.jpg" alt="" />
        <img src="./image/nuwaraeliya_hotel5.jpg" alt="" />
        <img src="./image/nuwaraeliya_hotel6.jpg" alt="" />
        <img src="./image/nuwaraeliya_hotel7.jpg" alt="" />
        <img src="./image/kandy_hotel1.jpeg" alt="" />
        <img src="./image/kandy_hotel2.jpeg" alt="" />
        <img src="./image/kandy_hotel3.jpeg" alt="" />
        <img src="./image/badulla_hotel1.jpeg" alt="" />
        <img src="./image/badulla_hotel2.jpeg" alt="" />
        <img src="./image/badulla_hotel3.jpeg" alt="" />
        <img src="./image/badulla_hotel4.jpeg" alt="" />
        <img src="./image/sigiriya_hotel1.jpg" alt="" />
        <img src="./image/sigiriya_hotel2.jpg" alt="" />
        <img src="./image/sigiriya_hotel3.jpg" alt="" />
        <img src="./image/anuradapura_hotel1.jpeg" alt="" />
        <img src="./image/anuradapura_hotel2.jpeg" alt="" />
        <img src="./image/anuradapura_hotel3.jpeg" alt="" />
        <img src="./image/anuradapura_hotel4.jpeg" alt="" />
        <img src="./image/polonnruwa_hotel1.jpeg" alt="" />
        <img src="./image/colombo_hotel1.jpeg" alt="" />
        <img src="./image/galle_hotel1.jpeg" alt="" />
        <img src="./image/trinco_hotel1.jpeg" alt="" />
        <img src="./image/gampola_hotel1.jpeg" alt="" />
        <img src="./image/gal182.jpeg" alt=""/>
        <img src="./image/gal184.jpeg" alt=""/>
        <img src="./image/gal185.jpeg" alt=""/>
        <img src="./image/gal186.jpeg" alt=""/>
        <img src="./image/gal188.jpeg" alt=""/>
        <img src="./image/gal190.jpeg" alt=""/>
      </div>

      <div class="our_service">
        <h3>food & drink</h3>
        <img src="./image/food2.jpg" alt="" />
        <img src="./image/food3.jpg" alt="" />
        <img src="./image/food4.jpg" alt="" />
        <img src="./image/food5.jpg" alt="" />
        <img src="./image/food6.jpg" alt="" />
        <img src="./image/food7.jpg" alt="" />
        <img src="./image/food8.jpg" alt="" />
        <img src="./image/food9.jpeg" alt="" />
        <img src="./image/food10.jpeg" alt="" />
        <img src="./image/food11.jpeg" alt="" />
        <img src="./image/food12.jpeg" alt="" />
        <img src="./image/food13.jpeg" alt="" />
        <img src="./image/food14.jpeg" alt="" />
        <img src="./image/food15.jpeg" alt="" />
        <img src="./image/food16.jpeg" alt="" />
        <img src="./image/food17.jpeg" alt="" />
        <img src="./image/food18.jpeg" alt="" />
        <img src="./image/food19.jpeg" alt="" />
        <img src="./image/food22.jpeg" alt="" />
      </div>

      <div class="our_service">
        <h3>transporation</h3>
        <img src="./image/vehicle1.jpg" alt="" />
        <img src="./image/vehicle2.jpg" alt="" />
        <img src="./image/vehicle3.jpg" alt="" />
        <img src="./image/vehicle4.jpg" alt="" />
        <img src="./image/vehicle5.png" alt="" />
        <img src="./image/vehicle6.jpeg" alt="" />
        <img src="./image/vehicle7.jpeg" alt="" />
        <img src="./image/vehicle8.jpg" alt="" />
        <img src="./image/vehicle9.jpg" alt="" />
        <img src="./image/vehicle10.jpg" alt="" />
        <img src="./image/vehicle20.jpg" alt="" />
      </div>

      <div class="our_service">
        <h3>tour guide</h3>
        <img src="./image/guide1.jpeg" alt="" />
        <img src="./image/Guide2.jpg" alt="" />
        <img src="./image/guide3.jpg" alt="" />
        <img src="./image/guide4.jpg" alt="" />
        <img src="./image/guide6.jpeg" alt="" />
        <img src="./image/guide7.jpeg" alt="" />
        <img src="./image/guidee8.jpeg" alt="" />
      </div>

      <div class="our_service">
        <h3>camp fire</h3>
        <img src="./image/fire1.jpeg" alt="" />
        <img src="./image/fire2.jpeg" alt="" />
        <img src="./image/fire3.jpeg" alt="" />
        <img src="./image/fire4.jpeg" alt="" />
        <img src="./image/fire5.jpeg" alt="" />
        <img src="./image/fire6.jpeg" alt="" />
        <img src="./image/fire7.jpeg" alt="" />
        <img src="./image/fire8.jpeg" alt="" />
        <img src="./image/fire9.jpeg" alt="" />
        <img src="./image/fire10.jpeg" alt="" />
        <img src="./image/fire11.jpeg" alt="" />
      </div>
    </div>

    <!--service section ends-->

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
