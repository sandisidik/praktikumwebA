<?php
session_start();
include_once('db-con.php');
$database = new database();

// ambil data file
$namaFile = $_FILES['foto_buku']['name'];
$namaSementara = $_FILES['foto_buku']['tmp_name'];
if(isset($_POST['submit'])){
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $penulis = $_POST['penulis'];
    $isbn = $_POST['isbn'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $rak = $_POST['rak'];
    $query = "INSERT INTO buku(judul,tahun,penulis,ISBN,kategori,stok,rak,pic)
                VALUES('$judul','$tahun','$penulis','$isbn','$kategori','$stok','$rak','$namaFile');";
    $result = mysqli_query($database->koneksi,$query);
}

// tentukan lokasi file akan dipindahkan
$dirUpload = "gambar/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if($terupload&&$result) {
    header('location:book-management.php');
} else {
    echo "Gagal!";
    echo "<a href=\"book-management.php\">Kembali</a>";
}
?>