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
    <link rel="stylesheet" href="css/about.css">

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
                    <a href="about.php" class="about active">about</a>
                    <a href="product.php">product</a>
                    <a href="index.php">reviews</a>
                    <a href="shop.php">shop</a>
                </nav>

                <a href="profile.php" class="profile"><i class="fas fa-user-circle" id="profil"></i></a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center" id="right">

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
                </div>

            </div>

            <div class="row align-items-center" id="left">

                <div class="col-md-6 image">
                    <img src="images/about.jpeg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <h3>Butk Fragrance and Beauty</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                        ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab
                        provident. Aperiam, officiis! Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>

            <div class="row align-items-center" id="right">

                <div class="col-md-6 image">
                    <img src="images/chanel.jpeg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <h3>Luxury Must be Comfortable. Otherwise, it is not Luxury</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                        ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab
                        provident. Aperiam, officiis! Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt mollit anim id est laborum. Ut enim ad minima veniam, quis nostrum exercitationem ullam
                        corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea
                        voluptate velit esse quam nihil molestiae consequatur,
                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

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