<?php 

require 'functions.php';
session_start();
$user_id = $_SESSION['login'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = $_POST['address'];
    $number = $_POST['number'];
    $product = $_POST['product'];
    
       $insert = mysqli_query($conn, "INSERT INTO `order_form`(username, name, address, number, product) VALUES('$username','$name','$address','$number','$product')") or die('query failed');
    
       if($insert){
          $message = 'Order Received!';
       }else{
          $message = 'Order Failed!';
       }

       header("Cache-Control: no cache");
       session_cache_limiter("private_no_expire");
}

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
    <link rel="stylesheet" href="css/shop.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

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
                    <a href="product.php">product</a>
                    <a href="index.php">reviews</a>
                    <a href="shop.php" class='active shop'>shop</a>
                </nav>

                <a href="profile.php" class="profile"><i class="fas fa-user-circle" id="profil"></i></a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->

    <section class="shop" id="shop">

        <?php
    $select = mysqli_query($conn, "SELECT * FROM `logindetails` WHERE id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($select) > 0){
        $fetch = mysqli_fetch_assoc($select);
    }?>

        <h1 class="heading">ORDER NOW!</h1>
        <?php 
        if(isset($message)){
            echo '<p class="message">'.$message.'</p>';
            
        }?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">

            <span>your name :</span>
            <input type="hidden" name="username" value=<?php echo $fetch['username']; ?>>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your address :</span>
            <input type="text" name="address" placeholder="enter your address" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>your order :</span>
            <input type="text" name="product" placeholder="enter your order" class="box" required>
            <input type="submit" value="Make Order" name="submit" class="link-btn">

        </form>

    </section>

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