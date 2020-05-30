<?php
session_start();
if($_SESSION['role'] != 'admin'){
    header('location:login.php');
}
?>
<?php
include_once('db-con.php');
$database = new database();
$query="select * from buku";
if(isset($_POST['filter'])){
  $keyword=$_POST['katakunci'];
  $option=$_POST['option'];
  $conditions=array();
  if(! empty($keyword))
    $conditions[] = "judul LIKE '%$keyword%'";
  if(! empty($option))
    $conditions[] = "kategori='$option'";
  $query;
  if (count($conditions) > 0) {
    $query .= " WHERE " . implode(' AND ', $conditions);
  }
  if(! empty($_POST['sort']))
    $query .= " ORDER BY " . $_POST['sort'] . " " . $_POST['order'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
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

<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <h1>Data Buku</h1>
            <button data-target="#create" data-toggle="modal" style="background-color: #191970;" class="btn btn-primary btn-lg btn-block">Input Buku Baru</button><br>
            <form action="galeri.php" method="post">
                <input type="text" placeholder="Search Keyword.." name="katakunci" id="mySearch">
                <select style="width: 150px;height: 47px;border:solid 1px lightgrey;margin-top:-25px;" name="option">
                <option value="" >Kategori</option>
                <?php 
                        $query2 = "SELECT DISTINCT kategori FROM buku";
                        $rs = mysqli_query($database->koneksi, $query2);
                        while ($cat = mysqli_fetch_assoc($rs)){
                        echo '<option value="'.$cat['kategori'].'">'.$cat['kategori'].'</option>';
                        }
                ?>
                </select>
                <br>
                <label>Sort By</label>
                <select style="width: 150px;height: 47px;border:solid 1px lightgrey;" name="sort">
                    <option value="id_buku">None..</option>
                    <option value="judul">Alfabet</option>
                    <option value="tahun">Tahun</option>
                </select>
                <select style="width: 150px;height: 47px;border:solid 1px lightgrey;" name="order">
                    <option value="ASC">Ascending</option>
                    <option value="DESC">Descending</option>
                </select>
                <button type="submit" class="button" name="filter">Apply Filter</button>
            </form>
            <table style="width: 700px; border: none;">
            <?php
                $result = mysqli_query($database->koneksi, $query);
                while($books = mysqli_fetch_assoc($result)){
                    require "bm-list.php";
                } 
            ?>
            </table>
            <br>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Sandi</p>
    </div>
    </div>
    <?php
        require "create-book.php";
    ?>
    <?php
        $result = mysqli_query($database->koneksi, $query);
        while($books = mysqli_fetch_assoc($result)){
            require "bm-list-modal.php";
        }
    ?>
</body>
</html>