<?php
require'functions.php';
session_start();

$user_id = $_SESSION['login'];

if(!isset($user_id)){
    header('location:login.php');
};
 

if (isset($_POST['update_profile'])) {

    $old_pass = $_POST['old_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if(password_verify($confirm_pass, $old_pass)) {
        if(update_username($_POST) > 0) {
            echo "<script>
                alert('Update Berhasil!');
            </script>";
            header('Location: profile.php');
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

        <?php
         $select = mysqli_query($conn, "SELECT * FROM `logindetails` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
    }?>

        <div class="card">
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class=prof1>
                    <a href="javascript:history.back()" class="return"><i class="fas fa-angle-left"
                            id="return_home"></i></a>
                    <div class="prof_head">
                        <h1>PROFILE</h1>
                    </div>
                </div>
                <img src="images/profil.png" class="up">
                <?php if(isset($error)) : ?>
                <p class="error">Password Salah!</p>
                <?php endif; ?>
                <div class="flex">
                    <div class="inputBox">
                        <span>Username :</span>
                        <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="box">
                        <span>Email :</span>
                        <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                        <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                        <span>Confirm Changes :</span>
                        <input type="password" name="confirm_pass" placeholder="Enter your password" class="box">
                    </div>
                </div>

                <input type="submit" value="update profile" name="update_profile" class="btn">
            </form>

        </div>

    </div>

</body>

</html>