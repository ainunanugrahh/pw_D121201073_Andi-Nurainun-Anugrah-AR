<?php 

require 'functions.php';
session_start();
$user_id = $_SESSION['login'];

if(!isset($user_id)){
   header('location:login.php');
};

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
   <link rel="stylesheet" href="css/product.css">

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
               <a href="index.php">home</a>
               <a href="about.php">about</a>
               <a href="product.php" class="active product">product</a>
               <a href="index.php">reviews</a>
               <a href="shop.php">shop</a>
            </nav>

            <a href="profile.php" class="profile"><i class="fas fa-user-circle" id="user"></i></a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- product section starts  -->

   <section class="product" id="product">

      <h1 class="heading">our product</h1>
      <div class="box-container container">

         <div class="box">
            <img src="images/parfum1.png" alt="">
            <h3>Eau Premiere</h3>
            <p class='price'>$150.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli. </p>
         </div>

         <div class="box">
            <img src="images/parfum2.png" alt="">
            <h3>Coco Mademoiselle</h3>
            <p class='price'>$88.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum3.png" alt="">
            <h3>Rplou Anne</h3>
            <p class='price'>$135.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum4.png" alt="">
            <h3>Paris Perfume</h3>
            <p class='price'>$115.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum5.png" alt="">
            <h3>Eau De Perfume</h3>
            <p class='price'>$90.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum10.png" alt="">
            <h3>Coco Paris Perfume</h3>
            <p class='price'>$120.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum7.png" alt="">
            <h3>N*5 Chanel Paris</h3>
            <p class='price'>$77.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum8.png" alt="">
            <h3>Paris N*5</h3>
            <p class='price'>$195.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div class="box">
            <img src="images/parfum11.png" alt="">
            <h3>Chanel Paris</h3>
            <p class='price'>$95.00</p>
            <p>Chanel is a Floral Aldehyde fragrance for women.
               The nose behind this fragrance is Jacques Polge.
               Top notes are Aldehydes, Ylang-Ylang and Neroli.</p>
         </div>

         <div>
         </div>

         <div class="center">
            <a href="shop.php" class="link-btn">Order Now!</a>
         </div>
      </div>

      </div>


   </section>

   <!-- product section ends -->

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

</html>