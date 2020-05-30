<?php
session_start();
include_once('db-con.php');
$database = new database();

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $query = "INSERT INTO user(user_name,email,password,role)
                VALUES('$nama','$email','$password','admin');";
    $result = mysqli_query($database->koneksi,$query);
}

if($result) {
    header('location:admin.php');
} else {
    echo "Gagal!";
    echo "<a href=\"admin.php\">Kembali</a>";
}
?>