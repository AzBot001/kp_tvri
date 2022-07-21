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
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
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
                                    <div class="col-4">
                                    <input type="number" name="h" min="1" max=24 class="form-control" placeholder="Jam">
                             
                                    </div>
                                    <div class="col-4">
                                    <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">
                              
                                    </div>
                                    <div class="col-4">
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
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
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
                                    <div class="col-4">
                                    <input type="number" name="h" min="0" max=24 class="form-control" placeholder="Jam">
                             
                                    </div>
                                    <div class="col-4">
                                    <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">
                              
                                    </div>
                                    <div class="col-4">
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
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
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
                                    <div class="col-4">
                                    <input type="number" name="h" min="1" max=24 class="form-control" placeholder="Jam">
                             
                                    </div>
                                    <div class="col-4">
                                    <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">
                              
                                    </div>
                                    <div class="col-4">
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
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
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
                                    <div class="col-4">
                                    <input type="number" name="h" min="1" max=24 class="form-control" placeholder="Jam">
                             
                                    </div>
                                    <div class="col-4">
                                    <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">
                              
                                    </div>
                                    <div class="col-4">
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
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ghi<?= $data['id_naskah'] ?>">
                    <i class="fas fa-cog"></i>
                </button>
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
                                    <div class="col-4">
                                    <input type="number" name="h" min="1" max=24 class="form-control" placeholder="Jam">
                             
                                    </div>
                                    <div class="col-4">
                                    <input type="number" name="m" min="0" max=59 class="form-control" placeholder="Menit">
                              
                                    </div>
                                    <div class="col-4">
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