<?php
include_once('db-con.php');
$database = new database();
session_start();
// ambil data file
$bookId = $_POST['id_buku'];
$namaFile = $_FILES['foto_buku']['name'];
$namaSementara = $_FILES['foto_buku']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "gambar/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
$query = "UPDATE buku SET pic = '$namaFile' WHERE id_buku=$bookId;";
$result = mysqli_query($database->koneksi, $query);

if($terupload&&$result) {
    header('location:book-management.php');
} else {
    echo "Upload Gagal!";
    echo "<a href=\"book-management.php\">Kembali</a>";
}

?>