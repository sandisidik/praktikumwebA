<?php
echo "
<div id=\"create\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Admin Baru</h4>
      </div>
      <div class=\"modal-body\">
                    <form action=\"admin-baru.php\" method=\"post\" name=\"admin-baru\">
                    Nama: <input type=\"text\" name=\"nama\"><br>
                    Email: <input type=\"email\" name=\"email\"><br>
                    Password: <input type=\"password\" name=\"password\"><br>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>";
?>