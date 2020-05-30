<?php
session_start();
if($_SESSION['role']!='admin'){
    header('location:index.php');
}
include_once('db-con.php');
$database = new database();
$query = 'SELECT kategori FROM buku;';
$cat = mysqli_query($database->koneksi,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/kontak.css">
</head>

<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <h1>Daftar Kategori</h1>
            <ol>
            <?php
            while($category = mysqli_fetch_assoc($cat)){
                echo "<li>".$category['kategori']."</li><br>";
            } 
            ?>
            </ol>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
        </div>

    </div>
</body>

</html>