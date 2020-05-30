<?php
session_start();
if($_SESSION['role']!='admin'){
    header('location:index.php');
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
$id_user = $_SESSION['id'];
$query = "SELECT * FROM pinjaman INNER JOIN buku INNER JOIN user WHERE pinjaman.id_buku=buku.id_buku AND pinjaman.id_user=user.id_user;"
?>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <center>
                <h1 style="text-align: center;">Status Pinjaman</h1>
                <table style="text-align: left;padding:10px;width:100%;">
                    <tr>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Ambil/Kembali</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include_once("db-con.php");
                    $database = new database();
                    $result = mysqli_query($database->koneksi,$query);
                    while($pj = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$pj['user_name']."</td>
                                <td>".$pj['judul']."</td>";
                        if($pj['status']=='mohon'){
                            echo "<td>".$pj['tgl_ambil']."</td>";
                        }
                        elseif($pj['status']=='dipinjam'){
                            echo "<td>".$pj['tgl_kembali']."</td>";
                        }       
                        echo "<td>".$pj['status']."</td>";
                        if($pj['status']=='mohon'){
                            echo "<td><a href=\"proses.php?id_pinjam=".$pj['id_pinjam']."&id_buku=".$pj['id_buku']."\">Proses</a>
                                    <a href=\"batal.php?id=".$pj['id_pinjam']."\">Batal</a></td>";
                        }
                        elseif($pj['status']=='dipinjam'){
                            echo "<td><a href=\"kembali.php?id_pinjam=".$pj['id_pinjam']."&id_buku=".$pj['id_buku']."\">Kembali</a></td>";
                        }
                        echo "</tr>";
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