<?php

function tampil_ref_sulampa($mysqli,$base_url){
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM naskah JOIN sumber_berita ON naskah.id_kategori = sumber_berita.id_sumber_berita WHERE jenis = 'sulampa' ORDER BY id_naskah DESC");
    while($data = $query->fetch_assoc()){
        ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $data['judul'] ?></td>
                <td> <?= $data['kameramen'] ?> </td>
                <td><?= tgl_indo($data['tgl_berita']) ?></td>
                <td><?= $data['nama_sumber_berita'] ?></td>
                <td>
                    <a href="<?= $base_url ?>ref_sulampa/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php
    }
}

?>