<?php
session_start();
include_once('db-con.php');
$database = new database();
$id = $_SESSION['id'];
$name = $_POST['nama'];
$email = $_POST['email'];
if($_POST['nama']!="" && $_POST['email']!=""){
    $query = "UPDATE user SET user_name='$name', email='$email' WHERE id_user=$id";
}
elseif($_POST['nama']=="" && $_POST['email']!=""){
    $query = "UPDATE user SET email='$email' WHERE id_user=$id";
}
elseif($_POST['nama']!="" && $_POST['email']==""){
    $query = "UPDATE user SET user_name='$name' WHERE id_user=$id";
}
$return = mysqli_query($database->koneksi,$query);
if($return){
    header('location:kontak.php');
}
?>