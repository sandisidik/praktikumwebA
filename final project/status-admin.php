<?php
include_once('db-con.php');
$database = new database();
$id_user = $_GET['id_user'];
$role = $_GET['role'];
if($role == 'admin'){
    $query = "UPDATE user SET role = 'nonaktif' WHERE id_user=$id_user";
}
else{
    $query = "UPDATE user SET role = 'admin' WHERE id_user=$id_user";
}
$result = mysqli_query($database->koneksi,$query);
if($result){
    header('location:admin.php');
}
else{
    echo "Gagal!<br><a href=\"admin.php\">Kembali</a>";
}
?>
