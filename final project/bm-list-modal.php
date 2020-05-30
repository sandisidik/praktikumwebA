<?php
echo "
<div id=\"modal".$books['id_buku']."\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Edit Buku".$books['judul']."</h4>
      </div>
      <div class=\"modal-body\">
        <table>
            <tr>
                <td>
                    <img style=\"width:250px;margin-right: 30px;\" src=\"gambar/".$books['pic']."\">
                    <form action=\"foto-buku.php\" method=\"post\" enctype=\"multipart/form-data\">
                        Foto buku: <input type=\"file\" name=\"foto_buku\"/>
                        <input type=\"text\" name=\"id_buku\" value=\"".$books['id_buku']."\" hidden>
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"upload\" value=\"Upload Foto\"/>
                    </form>
                </td>
                <td>
                    <form action=\"edit-buku.php\" method=\"post\" name=\"edit-buku\">
                    <input type=\"text\" name=\"id_buku\" value=\"".$books['id_buku']."\" hidden>
                    Judul: <input type=\"text\" name=\"judul\" value=\"".$books['judul']."\"><br>
                    Tahun: <input type=\"text\" name=\"tahun\" value=\"".$books['tahun']."\"><br>
                    Penulis: <input type=\"text\" name=\"penulis\" value=\"".$books['penulis']."\"><br>
                    ISBN: <input type=\"text\" name=\"isbn\" value=\"".$books['ISBN']."\"><br>
                    Kategori: <input type=\"text\" name=\"kategori\" value=\"".$books['kategori']."\"><br>
                    Stok: <input type=\"text\" name=\"stok\" value=\"".$books['stok']."\"><br>
                    Rak: <input type=\"text\" name=\"rak\" value=\"".$books['rak']."\"><br>
                </td>
            </tr>
        </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>";
?>