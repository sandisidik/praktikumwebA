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
$id_user = $_SESSION['id'];
$query = "SELECT * FROM pinjaman INNER JOIN buku WHERE pinjaman.id_buku=buku.id_buku AND pinjaman.id_user=$id_user;"
?>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <center>
                <h1 style="text-align: center;">Status Pinjaman</h1>
                <table style="text-align: left;padding:10px;width:100%;">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tgl. Ambil</th>
                        <th>Tgl. Kembali</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    include_once("db-con.php");
                    $database = new database();
                    $result = mysqli_query($database->koneksi,$query);
                    while($pj = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$pj['judul']."</td>
                                <td>".$pj['tgl_ambil']."</td>
                                <td>".$pj['tgl_kembali']."</td>
                                <td>".$pj['status']."</td>
                            </tr>";
                    }
                    ?>
                </table>
            </center>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
        </div>

    </div>
</body>

</html>