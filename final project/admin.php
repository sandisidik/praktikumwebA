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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/galeri.css">
</head>
<?php
$query = "SELECT * FROM user WHERE role='admin' OR role='nonaktif';"
?>
<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
                <h1 style="text-align: center;">Daftar Admin</h1>
                <button data-target="#create" data-toggle="modal" style="background-color: #DC143C;" class="btn btn-primary btn-lg btn-block">Input Admin Baru</button><br>
                <table style="text-align: left;padding:10px;width:100%;">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
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
                                <td>".$pj['email']."</td>
                                <td>".($pj['role'] == 'admin' ? 'Aktif' : 'Nonaktif')."</td>
                                <td><a href=\"status-admin.php?id_user=".$pj['id_user']."&role=".$pj['role']."\">".($pj['role'] != 'admin' ? 'Aktifkan' : 'Nonaktifkan')."</a></td>
                            </tr>";
                    }
                    ?>
                </table>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
        </div>
    </div>
    <?php
    require "create-admin.php";
    ?>
</body>

</html>