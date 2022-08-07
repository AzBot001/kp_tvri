<?php
include 'app/controller/admin/post_sumber_berita.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">Data Nama Sumber Berita</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['msg_simpan_sumber_berita'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan_sumber_berita'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_edit_sumber_berita'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_edit_sumber_berita'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_hapus_sumber_berita'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_hapus_sumber_berita'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputsumber_berita"><i class="fas fa-plus-circle"></i> Nama Program</button>
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sumber Berita</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_sumber_berita($mysqli); ?>
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
<div class="modal fade" id="inputsumber_berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Sumber Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Sumber Berita</label>
                                <input type="text" name="nama_sumber_berita" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan_sumber_berita" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ----------------------modal_input---------------------- -->