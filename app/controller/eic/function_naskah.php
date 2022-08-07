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

            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_paket'] ?>">
                    <button class="btn btn-xs btn-warning text-white" type="button" data-toggle="modal" data-target="#edit<?= $data['id_paket'] ?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-xs btn-danger" type="submit" name="hapus" onclick="return confirm('Anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="edit<?= $data['id_paket'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit - <?= $data['judul_paket'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Paket Acara</label>
                                        <input type="hidden" name="id" value="<?= $data['id_paket'] ?>">
                                        <input type="text" name="judul_paket" class="form-control" value="<?= $data['judul_paket'] ?>" id="">
                                    </div>
                                    <div class="form-group">
                                        <label>Program Paket</label>
                                        <select name="program_paket" class="form-control">
                                            <option hidden value="<?= $data['program_paket'] ?>">
                                                <?= $data['nama_program_cu'] ?>
                                            </option>

                                            <?php

                                            $judul_cu = $mysqli->query("SELECT * FROM program_cu");
                                            while ($dataz = $judul_cu->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $dataz['id_program_cu'] ?>"><?= $dataz['nama_program_cu'] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarah Acara</label>
                                        <select name="pengarah_acara" class="form-control">
                                            <option hidden value="<?= $data['pengarah_acara'] ?>">
                                                <?= $data['nama_user'] ?>
                                            </option>

                                            <?php

                                            $userd = $mysqli->query("SELECT * FROM user WHERE level != '0'");
                                            while ($dataaa = $userd->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $dataaa['id_user'] ?>"><?= $dataaa['nama_user'] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Paket Sekarang</label>
                                        <select name="status" class="form-control">
                                            <option hidden value="<?= $data['status'] ?>">
                                                <?php
                                                if ($data['status'] == '0') {
                                                    echo 'Belum Produksi';
                                                } else if ($data['status'] == '1') {
                                                    echo 'Sementara Produksi';
                                                } else if ($data['status'] == '2') {
                                                    echo 'Proses Editing';
                                                } else if ($data['status'] == '3') {
                                                    echo 'Sudah Tayang';
                                                }
                                                ?>
                                            </option>
                                            <option value="0">Belum Produksi</option>
                                            <option value="1">Sementara Produksi</option>
                                            <option value="2">Proses Editing</option>
                                            <option value="3">Sudah Tayang</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Tanggal Tayang</label>
                                        <input name="tgl_tayang" value="<?= $data['tgl_tayang'] ?>" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Tayang" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
    }
}

function tampil_naskah_ghi($mysqli, $base_url)
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
                    <a href="<?= $base_url ?>app/controller/eic/cetak/cetak_ghi.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/eic/cetak/cetak_gns.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/eic/cetak/cetak_habari.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/eic/cetak/cetak_sulampa.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                    <a href="<?= $base_url ?>app/controller/eic/cetak/cetak_dialog.php?id=<?= $data['id_naskah'] ?>" class="btn btn-success btn-xs" target="_blank"><i class="fas fa-print"></i></a>
                </form>
                <a href="<?= $base_url ?>editdialog_eic/<?= $data['id_naskah'] ?>" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>


    <?php
    }
}


function tampil_rndwn($mysqli, $base_url)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM rundown");
    while ($data = $query->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td>
                <?php

                if ($data['jenis'] == 'ghi') {
                    echo 'Rundown Gorontalo Hari Ini';
                } else if ($data['jenis'] == 'gns') {
                    echo 'Rundown Gorontalo News Service';
                } else {
                    echo "Rundown Habari Lo Hulondalo";
                }

                ?>
            </td>
            <td><?= tgl_indo($data['tanggal']) ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-xs btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-print"></i>
                    </button>
                    <button class="btn btn-xs btn-warning text-white"><i class="fas fa-edit"></i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Cetak Rundown</a>
                        <a class="dropdown-item" href="#">Cetak Naskah</a>
                        <a class="dropdown-item" href="#">Cetak Lead</a>
                    </div>
                </div>
                
            </td>
        </tr>
<?php
    }
}

?>