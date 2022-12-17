<?php
require'functions.php';

if (isset($_POST['pw_reset'])) {

    $username=$_POST['username'];
    $new_pass=$_POST['new_pass'];
    $confirm_pass=$_POST['confirm_pass'];

    $result = mysqli_query($conn, "SELECT * FROM logindetails WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        if ($new_pass == $confirm_pass) {

            $confirm_pass = password_hash($new_pass, PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE `logindetails` SET password = '$confirm_pass' WHERE username = '$username'") or die('query failed');
            echo "<script>
                alert('Password Berhasil Diubah!');
            </script>";
            header('Location:login.php');
            exit;
        } else {
            echo mysqli_error($conn);
        }
    } $error = true;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/profile.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

   <!-- website icon -->
   <title>PerFume</title>
   <link rel="icon" type="image/png" href="images/parfum.png">

</head>
<body>
   <div class="update-profile">

    <div class="card">
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class=prof1>
                <a href="login.php" class="return"><i class="fas fa-angle-left" id="return_home"></i></a>
                <div class="prof_head">
                    <h1>Reset Password</h1>
                </div>
            </div>
            <img src="images/profil.png" class="up">
            <?php if(isset($error)) : ?>
                <p class="error">User Tidak Terdaftar!</p>
            <?php endif; ?>
            <div class="flex">
                <div class="inputBox">
                    <span>Username :</span>
                    <input type="text" name="username" placeholder="Username" class="box">
                    <span>New Password :</span>
                    <input type="password" name="new_pass" placeholder="Enter new password" class="box">
                    <span>Confirm Password :</span>
                    <input type="password" name="confirm_pass" placeholder="Confirm password" class="box">
                </div>
            </div>
        <input type="submit" value="Reset Password" name="pw_reset" class="btn">
      </div>

   </form>

    </div>
   
</div>

</body>
</html>