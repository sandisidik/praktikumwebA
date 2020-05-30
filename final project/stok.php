<?php
session_start();
if($_SESSION['role'] != 'suadmin'){
    header('location:login.php');
}
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
<?php
$query = "SELECT * FROM buku;"
?>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
                <h1 style="text-align: center;">Stok Buku</h1>
                <table style="text-align: left;padding:10px;width:100%;">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Kategori Buku</th>
                        <th>ISBN</th>
                        <th>Stok</th>
                    </tr>
                    <?php
                    $count = 1;
                    include_once("db-con.php");
                    $database = new database();
                    $result = mysqli_query($database->koneksi,$query);
                    while($pj = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>$count</td>
                                <td>".$pj['judul']."</td>
                                <td>".$pj['kategori']."</td>
                                <td>".$pj['ISBN']."</td>
                                <td>".$pj['stok']."</td>
                            </tr>";
                            $count++;
                    }
                    ?>
                </table>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
        </div>
    </div>
</body>

</html>