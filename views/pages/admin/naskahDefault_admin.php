<?php
include 'app/controller/admin/post_naskah_default.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Naskah Default</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['msg_simpan_naskah_default'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan_naskah_default'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_edit_naskah_default'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_edit_naskah_default'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_hapus_naskah_default'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_hapus_naskah_default'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputnaskah_default"><i class="fas fa-plus-circle"></i> Naskah Default</button>
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Naskah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_naskah_default($mysqli,$base_url); ?>
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
<div class="modal fade" id="inputnaskah_default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Naskah Default</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Judul Naskah</label>
                                <input type="text" name="judul_naskah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" class="form-control">
                                    <option hidden>-Pilih Jenis-</option>
                                    <option value="1">GHI</option>
                                    <option value="2">GNS</option>
                                    <option value="3">HABARI</option>
                                    <option value="4">SEMUA JENIS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Narasi</label>
                                <textarea id="summernote_naskah_default" name="narasi_default" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan_naskah_default" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ----------------------modal_input---------------------- -->