<?php
include 'app/controller/admin/post_user.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php
                        if (isset($_SESSION['msg_simpan_user'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan_user'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_reset'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_reset'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                         <?php
                        if (isset($_SESSION['msg_aktif'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_aktif'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['msg_aktiff'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_aktiff'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?> <?php
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
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputuser"><i class="fas fa-plus-circle"></i> User</button>
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_user($mysqli) ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="inputuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama User</label>
                                <input type="text" name="nm_user" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option hidden>-Pilih Level User-</option>
                                    <option value="1">Reporter</option>
                                    <option value="2">User</option>
                                    <option value="3">Desk</option>
                                    <option value="4">Editor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan_user" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>