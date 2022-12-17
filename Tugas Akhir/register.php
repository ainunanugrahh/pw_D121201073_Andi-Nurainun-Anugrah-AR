<?php
require 'functions.php';
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
if(isset($_POST["btn_reg"])) {

    if(cek_username($_POST) === false){
        $message = 'Username Tidak Tersedia!';
    } else{
        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('Register Berhasil!');
            </script>";
            header('Location:login.php');
        } else {
            $message = 'Password Salah!';
            echo mysqli_error($conn);
        }

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logreq.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>PerFume</title>
    <!-- website icon -->
    <title>PerFume</title>
    <link rel="icon" type="image/png" href="images/parfum.png">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="register.php" method="post" autocomplete="off">
                <h1 id="log-title">Register</h1>
                <?php 
                if(isset($message)){
                        echo '<p class="error">'.$message.'</p>';
                }?>

                <div class="form-group">
                    <input type="text" id="usr_reg" placeholder="Username" required="true" name="username" />
                </div>
                <div class="form-group">
                    <input type="email" id="email_reg" placeholder="Email" required="true" name="email" />
                </div>
                <div class="form-group">
                    <input type="password" id="pw_field" placeholder="Password" required="true" name="password" />
                    <span></span>
                    <i class="far fa-eye" id="togglePassword"></i>
                </div>
                <div class="form-group">
                    <input type="password" id="pw_field" placeholder="Confirm Password" required="true"
                        name="password2" />
                    <span></span>
                </div>
                <div class="form-button">
                    <input type="submit" value="Register" name="btn_reg" />
                </div>
                <span>Already A Member? <a class="link" href="login.php">Login</a></span>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome To Our Shop!</h1>
                    <p>PerFume</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/login.js"></script>

</html>