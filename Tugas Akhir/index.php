<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PerFume</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/index.css">

   <!-- website icon -->
   <title>PerFume</title>
   <link rel="icon" type="image/png" href="images/parfum.png">

</head>

<body>

   <!-- header section starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">Per<span>Fume</span></a>

            <nav class="nav">
               <a href="#home">home</a>
               <a href="#about">about</a>
               <a href="#product">product</a>
               <a href="#reviews">reviews</a>
               <a href="#shop">shop</a>
            </nav>

            <?php if( isset($_SESSION["login"]) && !empty($_SESSION["login"])) :
         ?>
            <a href="profile.php" class="profile"><i class="fas fa-user-circle" id="profile"></i></a>
            <?php else: ?>
            <a href="login.php" class="link-btn">Login</a>
            <?php endif; ?>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
               <h3>CHANEL</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
               <a href="#shop" class="link-btn">Shop Now!</a>
            </div>
         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 image">
               <img src="images/chbg.jpeg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span>about us</span>
               <h3>Traces its roots back to 1870</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                  ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab
                  provident. Aperiam, officiis! Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                  officia
                  deserunt mollit anim id est laborum.
               </p>
               <a href="about.php" class="link-btn">view more</a>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- product section starts  -->

   <section class="product" id="product">

      <h1 class="heading">our product</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/parfum1.png" alt="">
            <h3>Eau Premiere</h3>
            <p class='price'>$150.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
         </div>

         <div class="box">
            <img src="images/parfum2.png" alt="">
            <h3>Coco Mademoiselle</h3>
            <p class='price'>$88.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
         </div>

         <div class="box">
            <img src="images/parfum3.png" alt="">
            <h3>Rplou Anne</h3>
            <p class='price'>$135.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/parfum4.png" alt="">
            <h3>N*5 Parfum</h3>
            <p class='price'>$115.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/parfum5.png" alt="">
            <h3>Eau De Parfum</h3>
            <p class='price'>$90.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/parfum10.png" alt="">
            <h3>Coco N*5 Mademoiselle</h3>
            <p class='price'>$120.00</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div>
         </div>

         <div class="center">
            <a href="product.php" class="link-btn">view more</a>
         </div>

      </div>

   </section>

   <!-- product section ends -->

   <!-- best perfume section starts  -->

   <section class="bestperfume">

      <h1 class="heading">Best Perfume At Our shop</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/parfum6.png" alt="">
            <h3>N5 Chanel</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/banner2.png" alt="">
            <h3>N*5 Chanel</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/parfum9.png" alt="">
            <h3>Coco Noir</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

      </div>

   </section>

   <!-- best perfume section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> Our Review </h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
               laboriosam asperiores iure omnis alias?</p>

            <h3>padlu</h3>
            <span>model</span>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
               laboriosam asperiores iure omnis alias?</p>

            <h3>pola</h3>
            <span>artist</span>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
               laboriosam asperiores iure omnis alias?</p>

            <h3>mutu</h3>
            <span>CEO</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- shop section starts  -->

   <section class="shop" id="shop">

      <h1 class="heading">Order Now!</h1>

      <div class="button-container">
         <a href="shop.php" class="link-btn">Make Order</a>
      </div>

   </section>

   <!-- shop section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+628-456-7890</p>
            <p>+628-222-3333</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>gowa, indonesia - 14022</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>00:00am to 10:00pm</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>kelompok2@gmail.com</p>
            <p>group2@gmail.com</p>
         </div>

      </div>

      <div class="credit"> &copy; copyright @
         <?php echo date('Y'); ?> by <span>group 2</span>
      </div>

   </section>

   <!-- footer section ends -->

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>