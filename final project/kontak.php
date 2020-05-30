<?php
session_start();
include_once('db-con.php');
$database = new database();
$query = 'SELECT * FROM user WHERE id_user='.$_SESSION['id'].';';
$user = mysqli_query($database->koneksi,$query);
$user = $user->fetch_array();
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
            <center>
                <h1 style="text-align: center;"><?php echo $user['user_name']?></h1>
                <img src="gambar/<?php echo $user['picture'];?>" alt="Profile Picture" style="height: 150px; display: block; margin: auto;"><br>
                <form action="foto-profil.php" method="post" enctype="multipart/form-data" style="border:solid #29aae3 1px; padding: 20px;width: 60%;">
                    Foto profil: <input type="file" name="profil_pic"/>
                    <input class="btn btn-primary" type="submit" name="upload" value="Upload"/><br><br>
                </form>
                <form action="edit-profil.php" method="post">
                    <br>
                    Nama: <input type="text" value="" name="nama" placeholder="<?php echo $user['user_name']?>"><br><br>
                    Email: <input type="email" value="" name="email" placeholder="<?php echo $user['email']?>"><br><br>
                    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan"/>
                </form>
            </center>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
        </div>

    </div>
</body>

</html>