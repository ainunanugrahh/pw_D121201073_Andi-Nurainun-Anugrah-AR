<?php
session_start();

require 'functions.php';
if(isset($_POST['login_Btn'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM logindetails WHERE username = '$username'");
    
    if(mysqli_num_rows($result)==1) {
        // check password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            
            //set session
            $_SESSION["login"] = $row['id'];

            header('Location:index.php');
            exit;
        }
    }

    $error = true;
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
            <form method="post" action="login.php" autocomplete="off">
                <h1 id="log-title">Login</h1>

                <?php if(isset($error)) : ?>
                <p class="error">Username/Password Salah!</p>
                <?php endif; ?>

                <div class="form-group">
                    <input type="text" id="usr_field" placeholder="Username" required="true" name="username" />
                    <span></span>
                </div>
                <div class="form-group">
                    <input class="pass" type="password" id="pw_field" placeholder="Password" required="true"
                        name="password" />
                    <span></span>
                    <i class="far fa-eye" id="togglePassword"></i>
                    <span><a class="link" href="reset_pass.php">Forgot Password? </a></span>
                </div>
                <div class="form-button">
                    <input type="submit" value="Login" name="login_Btn" />
                </div>
                <span>Not A Member? <a class="link" href="register.php">Register</a></span>

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