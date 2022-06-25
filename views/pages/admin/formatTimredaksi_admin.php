<?php
include 'app/controller/admin/post_tim_redaksi.php';
$query = $mysqli->query("SELECT * FROM setting_tim_redaksi");
$data = $query->fetch_assoc();

?>
<div class="content-wrapper">

    <section class="content">
        <!-- <div class="container-fluid">
            <div class="row">
                <h3>Verivikasi User</h3>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12 mt-4">
                <!-- general form elements disabled -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">TIM REDAKSI TVRI GORONTALO</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                <?php
                        if (isset($_SESSION['msg_set'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_set'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" name="penanggung_jawab" class="form-control" value="<?= $data['penanggung_jawab'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Pelaksana Produser</label>
                                        <input type="text" name="pelaksana_produser" class="form-control" value="<?= $data['pelaksana_produser'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Pelaksana Tugas Berita</label>
                                        <input type="text" name="pelaksana_berita" class="form-control" value="<?= $data['pelaksana_berita'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-group">
                                        <label>Pelaksana Current Affair</label>
                                        <input type="text" name="pelaksana_cu" class="form-control" value="<?= $data['pelaksana_cu'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>E.I.C</label>
                                        <input type="text" name="eic" class="form-control" value="<?= $data['eic'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-group">
                                        <label>Redaktur</label>
                                        <input type="text" name="redaktur" class="form-control" value="<?= $data['redaktur'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Petugas IT</label>
                                        <input type="text" name="petugas_it" class="form-control" value="<?= $data['petugas_it'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-group">
                                        <label>PD Berita</label>
                                        <input type="text" name="pd_berita" class="form-control" value="<?= $data['pd_berita'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>FD Berita</label>
                                        <input type="text" name="fd_berita" class="form-control" value="<?= $data['fd_berita'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="form-group">
                                        <label>Editor</label>
                                        <input type="text" name="editor" class="form-control" value="<?= $data['editor'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Penyiar</label>
                                        <input type="text" name="penyiar" class="form-control" value="<?= $data['penyiar'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-sm-6">
                               <div class="form-group">
                                    <button name="simpan" class="btn btn-warning text-white"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                               </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
</div>
</section>
</div>