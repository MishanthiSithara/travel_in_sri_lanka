<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>book</title>

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

<?php if (isset($_SESSION['message'])): ?>
  <p style="color: green; text-align: center;"><?= $_SESSION['message']; unset($_SESSION['message']); ?></p>
<?php endif; ?>


    <!--header section starts-->
    <?php
       include_once "./components/nav.php"
       ?>

    <!--header section end-->

    <div
      class="heading-about"
      style="background: url(image/book_now1.png) no-repeat"
    >
      <h1>book now</h1>
    </div>

    <!--booking section start-->

    <section class="booking">
      <h1 class="heading-title">book your trip!</h1>

      <form action="./handlers/submit_booking.php" method="post" class="book-form">
        <?php
          $package_id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
        ?>
        <input type="text" name="package_id" value="<?= $package_id ?>" readonly>
        <div class="flex">
          <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" />
          </div>

          <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" />
          </div>

          <div class="inputBox">
            <span>phone :</span>
            <input
              type="number"
              placeholder="enter your phone number"
              name="phone"
            />
          </div>

          <div class="inputBox">
            <span>address :</span>
            <input
              type="text"
              placeholder="enter your address"
              name="address"
            />
          </div>

          <div class="inputBox">
            <span>where to :</span>
            <input
              type="text"
              placeholder="place you want to visit"
              name="location"
            />
          </div>

          <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" />
          </div>

          <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" />
          </div>

          <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" />
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send" />
      </form>
    </section>

    <!--booking section end-->

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
