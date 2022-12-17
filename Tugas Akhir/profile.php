<?php

require 'functions.php';
session_start();
$user_id = $_SESSION['login'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/profile.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

   <!-- website icon -->
   <title>PerFume</title>
   <link rel="icon" type="image/png" href="images/parfum.png">

</head>

<body>

   <div class="container">

      <div class="profile">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM `logindetails` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
   }?>

         <div class=prof1>
            <a href="javascript:history.back()" class="return"><i class="fas fa-angle-left" id="return_home"></i></a>
            <div class="prof_head">
               <h1>PROFILE</h1>
            </div>
         </div>
         <img src="images/profil.png">
         <h3>
            <?php echo $fetch['username']; ?>
         </h3>
         <p>
            <?php echo $fetch['email']; ?>
         </p>
         <a href="update_profile.php" class="btn">update profile</a>
         <a href="logout.php" class="btn">logout</a>
      </div>

   </div>

</body>

</html>