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
$query = "SELECT * FROM user WHERE role='user';"
?>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
                <h1 style="text-align: center;">Daftar Pengguna</h1>
                <table style="text-align: left;padding:10px;width:100%;">
                    <tr>
                        <th>No</th>
                        <th>Picture</th>
                        <th>Nama</th>
                        <th>Email</th>
                    </tr>
                    <?php
                    $count = 1;
                    include_once("db-con.php");
                    $database = new database();
                    $result = mysqli_query($database->koneksi,$query);
                    while($pj = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>$count</td>
                                <td><img style=\"height:80px;\" src=\"gambar/".$pj['picture']."\"></td>
                                <td>".$pj['user_name']."</td>
                                <td>".$pj['email']."</td>
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