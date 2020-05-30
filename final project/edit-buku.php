<?php
session_start();
include_once('db-con.php');
$database = new database();
if(isset($_POST['submit'])){
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $penulis = $_POST['penulis'];
    $isbn = $_POST['isbn'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $rak = $_POST['rak'];
    $query = "UPDATE buku SET id_buku='$id_buku',
                judul='$judul',
                tahun='$tahun',
                penulis='$penulis',
                ISBN='$isbn',
                kategori='$kategori',
                stok='$stok',
                rak='$rak'
                WHERE id_buku=$id_buku;";
    $result = mysqli_query($database->koneksi,$query);
}
if($result){
    header('location:book-management.php');
}
else{
    echo "Edit Buku Gagal!<br><a href=\"book-management.php\">Kembali</a>";
}
?>