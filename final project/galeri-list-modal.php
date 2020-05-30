<?php
echo "
<form action=\"mohon-pinjam.php\" method=\"post\" name=\"pinjam\">
<input name=\"id\" value=\"".$books['id_buku']."\" hidden>
<div id=\"modal".$books['id_buku']."\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">".$books['judul']."</h4>
      </div>
      <div class=\"modal-body\">
        <table>
            <tr>
                <td>
                    <img style=\"width:250px;margin-right: 30px;\" src=\"gambar/".$books['pic']."\">
                </td>
                <td>
                    <p>".$books['judul']."</p>
                    <p>Tahun Terbit : ".$books['tahun']."</p>
                    <p>Nama Penulis : ".$books['penulis']."</p>
                    <p>ISBN : ".$books['ISBN']."</p>
                    <p>Kategori : ".$books['kategori']."</p>
                    <p>Stok : ".$books['stok']."</p>
                    <p>Rak : ".$books['rak']."</p>
                    <p>Tanggal Ambil</p><input type=\"date\" name=\"tgl_ambil\">
                    <p>Tanggal Kembali</p><input type=\"date\" name=\"tgl_kembali\">
                </td>
            </tr>
        </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        ";
        if($books['stok']>0){
            echo "<button type=\"submit\" class=\"btn btn-default\">Pinjam</button>";
        }
        else{
            echo "<button type=\"submit\" class=\"btn btn-default\" disabled>Pinjam</button>";
        }
        echo "
      </div>
    </div>
  </div>
</div>
</form>";
?>