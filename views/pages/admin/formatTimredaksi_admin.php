<?php
include 'app/controller/admin/post_tim_redaksi.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">Kerabat Kerja</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['kerabat'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('kerabat'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['hps'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('hps'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['edit'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('edit'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputkerabat"><i class="fas fa-plus-circle"></i> Kerabat Kerja</button>
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Jabatan</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_kerabat($mysqli); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ----------------------modal_input---------------------- -->
<div class="modal fade" id="inputkerabat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Kerabat Kerja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Jabatan</label>
                                <input type="text" name="jabatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control">
                            </div>
                            <div class="form-group">
                               <input type="checkbox" name="ttd" value="1"> <label for="">Tanda Tangan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ----------------------modal_input---------------------- -->