<?php

function tampil_paket($mysqli)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM paket JOIN program_cu ON paket.program_paket = program_cu.id_program_cu JOIN user ON paket.pengarah_acara = user.id_user");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td>
                <?php
                $program = $mysqli->query("SELECT * FROM program_cu WHERE id_program_cu = '{$data['program_paket']}'");
                $dtprogram = $program->fetch_assoc();
                echo $dtprogram['nama_program_cu']

                ?>
            </td>
            <td><?= $data['judul_paket'] ?></td>
            <td>
                <?php
                $pd = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['pengarah_acara']}'");
                $dtpd = $pd->fetch_assoc();
                echo $dtpd['nama_user']
                ?>
            </td>
            <td> <?php
                    if ($data['status'] == '0') {
                    ?>
                    <div class="badge badge-danger text-white"><i class="fas fa-clock"></i> Belum Produksi</div>
                <?php
                    } else if ($data['status'] == '1') {
                ?>
                    <div class="badge badge-warning text-white"><i class="fas fa-clock"></i> Sementara Produksi</div>
                <?php
                    } else if ($data['status'] == '2') {
                ?>
                    <div class="badge badge-warning text-white"><i class="fas fa-clock"></i> Proses Editing</div>
                <?php
                    } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Tayang | <?= $data['tgl_tayang'] ?></div>
                <?php
                    }
                ?>
            </td>

        </tr>

<?php
    }
}

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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/user/cetak/cetak_ghi.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/user/cetak/cetak_gns.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/user/cetak/cetak_habari.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/user/cetak/cetak_sulampa.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/user/cetak/cetak_dialog.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
            </td>
        </tr>
<?php
    }
}

?>
