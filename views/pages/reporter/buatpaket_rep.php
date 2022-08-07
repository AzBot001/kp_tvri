<?php
include 'app/controller/reporter/post_paket.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h3>Data Paket Acara</h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">Buat Paket</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['msg_simpan'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                            ?><?php
                                if (isset($_SESSION['msg_hapus'])) {
                                ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_hapus'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                                }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_edit'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_edit'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>

                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputpaket"><i class="fas fa-plus-circle"></i> Paket Acara</button>
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Program</th>
                                    <th>Judul Paket</th>
                                    <th>Pengarah Acara</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_paket($mysqli) ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="inputpaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Paket Acara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pilih Program Acara</label>
                                <select name="program_paket" class="form-control">
                                    <option hidden>-Pilih Program Current Affair-</option>
                                    <?php

                                    $judul_cu = $mysqli->query("SELECT * FROM program_cu");
                                    while ($data = $judul_cu->fetch_assoc()) {
                                    ?>
                                        <option value="<?= $data['id_program_cu'] ?>"><?= $data['nama_program_cu'] ?></option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Judul Paket</label>
                                <input type="text" name="judul_paket" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Masukkan Pengarah Acara</label>
                                <select name="pengarah_acara" class="form-control">
                                    <option hidden>-Pilih Pengarah Acara-</option>
                                    <?php

                                    $user = $mysqli->query("SELECT * FROM user WHERE level != '0'");
                                    while ($data = $user->fetch_assoc()) {
                                    ?>
                                        <option value="<?= $data['id_user'] ?>"><?= $data['nama_user'] ?></option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Status Paket Sekarang</label>
                                <select name="status" class="form-control">
                                    <option hidden>-Masukkan Status Sekarang-</option>
                                    <option value="0">Belum Produksi</option>
                                    <option value="1">Sementara Produksi</option>
                                    <option value="2">Proses Editing</option>
                                    <option value="3">Sudah Tayang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Tanggal Tayang</label>
                                <input name="tgl_tayang" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Tayang" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan_paket" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>