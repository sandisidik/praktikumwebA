<?php
echo "
<div id=\"create\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Buku Baru</h4>
      </div>
      <div class=\"modal-body\">
                    <form action=\"buku-baru.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"buku-baru\">
                    Foto buku: <input type=\"file\" name=\"foto_buku\"/><br>
                    Judul: <input type=\"text\" name=\"judul\"><br>
                    Tahun: <input type=\"text\" name=\"tahun\"><br>
                    Penulis: <input type=\"text\" name=\"penulis\"><br>
                    ISBN: <input type=\"text\" name=\"isbn\" ><br>
                    Kategori: <input type=\"text\" name=\"kategori\" ><br>
                    Stok: <input type=\"text\" name=\"stok\" ><br>
                    Rak: <input type=\"text\" name=\"rak\" ><br>
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