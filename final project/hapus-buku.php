<?php
$id_buku = $_GET['id_buku'];
include_once('db-con.php');
$database = new database();
$query = "DELETE FROM buku WHERE id_buku=$id_buku;";
$result = mysqli_query($database->koneksi,$query);
if($result){
    header('location:book-management.php');
}
else{
    echo "Hapus Buku Gagal!<br><a href=\"book-management.php\">Kembali</a>";
}
?>