<?php
include_once('db-con.php');
$database = new database();
session_start();
// ambil data file
$userId = $_SESSION['id'];
$namaFile = $_FILES['profil_pic']['name'];
$namaSementara = $_FILES['profil_pic']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "gambar/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
$query = "UPDATE user SET picture = '$namaFile' WHERE id_user=$userId;";
$result = mysqli_query($database->koneksi, $query);

if($terupload&&$result) {
    header('location:kontak.php');
} else {
    echo "Upload Gagal!";
    echo "<a href=\"kontak.php\">Kembali</a>";
}

?>