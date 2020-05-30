<?php
    session_start();
    $id_pinjam = $_GET['id'];
    include_once('db-con.php');
    $database = new database();
    $query = "UPDATE pinjaman SET status='batal' WHERE id_pinjam=$id_pinjam;";
    $result = mysqli_query($database->koneksi,$query);
    if($result){
        header('location:peminjaman-admin.php');
    }
    else{
        echo "Gagal!<br><a href=\"peminjaman-admin.php\">Kembali</a>";
    }
?>