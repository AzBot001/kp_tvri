<?php

function tampil_naskah_ghi($mysqli, $l_reporter, $base_url)
{

    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kategori JOIN naskah ON kategori.id_kategori = naskah.id_kategori JOIN user ON naskah.id_user = user.id_user WHERE jenis='ghi' ORDER BY id_naskah DESC ");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td>
                <?php
                $kmrmn = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['kameramen']}'");
                $dtkmrmn = $kmrmn->fetch_assoc();
                echo $dtkmrmn['nama_user']

                ?>
            </td>
            <td><?= $data['nama_user'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
               <a href="<?= $base_url ?>editghi_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>

    <?php
    }
}

function tampil_naskah_gns($mysqli, $base_url)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kategori JOIN naskah ON kategori.id_kategori = naskah.id_kategori JOIN user ON naskah.id_user = user.id_user WHERE jenis='gns' ORDER BY id_naskah DESC ");
    while ($data = $query->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td>
                <?php
                $kmrmn = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['kameramen']}'");
                $dtkmrmn = $kmrmn->fetch_assoc();
                echo $dtkmrmn['nama_user']

                ?>
            </td>
            <td><?= $data['nama_user'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
            <a href="<?= $base_url ?>editgns_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>

      
    <?php
    }
}

function tampil_naskah_lipuu($mysqli, $base_url)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kategori JOIN naskah ON kategori.id_kategori = naskah.id_kategori JOIN user ON naskah.id_user = user.id_user WHERE jenis='habari' ORDER BY id_naskah DESC ");
    while ($data = $query->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td>
                <?php
                $kmrmn = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['kameramen']}'");
                $dtkmrmn = $kmrmn->fetch_assoc();
                echo $dtkmrmn['nama_user']

                ?>
            </td>
            <td><?= $data['nama_user'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
            <a href="<?= $base_url ?>edithabari_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>

       
    <?php
    }
}

function tampil_naskah_sulampa($mysqli, $base_url)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM sumber_berita JOIN naskah ON sumber_berita.id_sumber_berita = naskah.id_kategori WHERE jenis = 'sulampa' ORDER BY id_naskah DESC ");
    while ($data = $query->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['kameramen'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['lokasi'] ?></td>
            <td><?= $data['nama_sumber_berita'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
            <a href="<?= $base_url ?>editsulampa_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>

    <?php
    }
}

function tampil_naskah_dialog($mysqli, $base_url)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kategori JOIN naskah  ON kategori.id_kategori = naskah.id_kategori WHERE jenis = 'dialog' ");
    while ($data = $query->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['narasumber'] ?></td>
            <td><?= $data['ket_narsum'] ?></td>
            <td><?= tgl_indo($data['tgl_berita']) ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
            <td>
            <a href="<?= $base_url ?>editdialog_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a> 
            </td>
        </tr>

       
<?php
    }
}

?>