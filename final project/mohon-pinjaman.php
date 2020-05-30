<?php
session_start();
if($_SESSION['is_login']!=TRUE){
    header('location:login.php');
}
$id_buku = $_POST['id'];
$id_user = $_SESSION['id'];
$tgl_ambil = $_POST['tgl_ambil'];
$tgl_kembali = $_POST['tgl_kembali'];
$query = "INSERT INTO pinjaman(id_buku,id_user,tgl_ambil,tgl_kembali) VALUES('$id_buku','$id_user','$tgl_ambil','$tgl_kembali')";
include_once('db-con.php');
$database = new database();
$return = mysqli_query($database->koneksi,$query);
if($return){
    header('location:peminjaman-user.php');
}
?>