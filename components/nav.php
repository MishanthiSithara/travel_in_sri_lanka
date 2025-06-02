<section class="header">
      <a href="home.php" class="logo">travelA+</a>
      <nav class="navbar d-none">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="our_services.php">service</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="gallery.php">gallery</a>
        <a href="destination.php">destination</a>
        <a href="feedback.php">feedback</a>
        
        
        <?php if(isset($_SESSION['uId'])){ ?>
          <a href="./logout.php">logout</a>
          <?php }else { ?>
       <a href="./login.php"><i class="fas fa-user"></i></a>
        <a href="./admin/dashboard.php"><i class="fas fa-user-shield"></i></a>
        <?php } ?>

      <a href="./cart.php"><i class="fas fa-shopping-cart"></i></a> 

      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>
