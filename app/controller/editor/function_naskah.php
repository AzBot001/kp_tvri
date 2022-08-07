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
                                        <input type="text" name="judul_paket" class="form-control" value="<?= $data['judul_paket'] ?>" id="" required>
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
                <?php 
                if ($data['sts_edit'] == '1') {
                    echo '<i class="fas fa-check-circle text-success"></i>';
                }else{

                
                ?>
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
                <?php
                }
                ?>
            </td>
        </tr>

        <div class="modal fade" id="ghi<?= $data['id_naskah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">

                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="s" min="0" max=59 class="form-control" placeholder="Detik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="durasi" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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
                <?php 
                if ($data['sts_edit'] == '1') {
                    echo '<i class="fas fa-check-circle text-success"></i>';
                }else{

                
                ?>
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
                <?php
                }
                ?>
            </td>
        </tr>

        <div class="modal fade" id="ghi<?= $data['id_naskah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">

                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="s" min="0" max=59 class="form-control" placeholder="Detik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="durasi" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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
                <?php 
                if ($data['sts_edit'] == '1') {
                    echo '<i class="fas fa-check-circle text-success"></i>';
                }else{

                
                ?>
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
                <?php
                }
                ?>
            </td>
        </tr>

        <div class="modal fade" id="ghi<?= $data['id_naskah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">

                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="s" min="0" max=59 class="form-control" placeholder="Detik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="durasi" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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
                <?php 
                if ($data['sts_edit'] == '1') {
                    echo '<i class="fas fa-check-circle text-success"></i>';
                }else{

                
                ?>
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
                <?php
                }
                ?>
            </td>
        </tr>

        <div class="modal fade" id="ghi<?= $data['id_naskah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">

                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="s" min="0" max=59 class="form-control" placeholder="Detik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="durasi" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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
                <?php 
                if ($data['sts_edit'] == '1') {
                    echo '<i class="fas fa-check-circle text-success"></i>';
                }else{

                
                ?>
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
                <?php
                }
                ?>
            </td>
        </tr>

        <div class="modal fade" id="ghi<?= $data['id_naskah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Masukan Durasi</label>
                                <input type="hidden" name="id" value="<?= $data['id_naskah'] ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">

                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="s" min="0" max=59 class="form-control" placeholder="Detik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="durasi" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
<?php
    }
}

?>