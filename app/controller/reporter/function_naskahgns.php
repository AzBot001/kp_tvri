<?php

function gns_ghi($mysqli,$base_url){
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM naskah JOIN kategori ON naskah.id_kategori = kategori.id_kategori JOIN user ON naskah.id_user = user.id_user WHERE jenis = 'ghi' ORDER BY id_naskah DESC");
    while($data = $query->fetch_assoc()){
        ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $data['judul'] ?></td>
                <td>
                    <?php 
                        $petugas = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['kameramen']}'");
                        $ptgs = $petugas->fetch_assoc();
                        echo $ptgs['nama_user'];
                    ?>
                </td>
                <td><?= $data['nama_user'] ?></td>
                <td><?= tgl_indo($data['tgl_berita']) ?></td>
                <td><?= $data['nama_kategori'] ?></td>
                <td>
                    <a href="<?= $base_url ?>refgns/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php
    }
}
?>