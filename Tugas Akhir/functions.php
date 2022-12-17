<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "parfume_db");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cek_username($data) {
    global $conn;

    $username = strtolower(stripslashes(mysqli_real_escape_string($conn, $data["username"])));

    $result= mysqli_query($conn, "SELECT username FROM logindetails WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        return false;
    }


}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes(mysqli_real_escape_string($conn, $data["username"])));
    $email = strtolower(mysqli_real_escape_string($conn, $data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    if($password !== $password2) {
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO logindetails VALUES('', '$username', '$email', '$password')");
    return mysqli_affected_rows($conn);
}

function update_username($data) {
    global $conn;

    $user_id = $_SESSION['login'];
    $update_name = strtolower(stripslashes(mysqli_real_escape_string($conn, $data["update_name"])));
    $update_email = strtolower(mysqli_real_escape_string($conn, $data["update_email"]));

    $result= mysqli_query($conn, "SELECT * FROM logindetails WHERE username = '$update_name' ");
    if(mysqli_num_rows($result)> 1) {
        echo "<script>
            alert('Username Tidak Tersedia!');
            </script>";
        return false;
    }
    
    mysqli_query($conn, "UPDATE `logindetails` SET username = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');
    return mysqli_affected_rows($conn);
}

?>