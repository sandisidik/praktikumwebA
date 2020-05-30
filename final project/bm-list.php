<?php
echo "<tr>
    <td>
        <p style=\"margin-top: -100px;\"> </p>
    </td>
    <td>
        <div class=\"galeri\">
            <img src=\"gambar/".$books['pic']."\">
        </div>
    </td>
    <td>
        <div id=\"detail\">
            <h5>".$books['judul']."</h5>
            <p>by ".$books['penulis']."</p>
            <p>Kategori : ".$books['kategori']."</p>
            <a><button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal".$books['id_buku']."\">Edit</button></a>
            <a href=\"hapus-buku.php?id_buku=".$books['id_buku']."\"><button class=\"btn btn-danger\">Hapus</button></a>
        </div>
    </td>
</tr>";
?>