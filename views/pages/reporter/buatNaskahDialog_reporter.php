<?php
include 'app/controller/reporter/post_naskahdialog.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12 mb-3 mt-3">
                        <!-- general form elements disabled -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">NASKAH DIALOG</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="hidden"name="id_user" value="<?= $_SESSION['id'] ?>">
                                            <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul Berita" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nama Narasumber</label>
                                            <input name="narasumber" type="text" class="form-control" placeholder="Masukkan Nama Narasumber" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nomor HP Narasumber</label>
                                            <input name="nomorhp_narsum" type="text" class="form-control" placeholder="Masukkan Nomor HP Narasumber">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" >
                                            <label>Keterangan Narasumber</label>
                                            <input name="ket_narsum"  type="text" class="form-control" placeholder="Masukkan Keterangan Narasumber"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Tanggal Berita</label>
                                        <input name="tgl_berita" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Berita" required />
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Kategori Berita</label>
                                            <select class="form-control" name="kategori" required>
                                                <option hidden>--Pilih Kategori--</option>
                                                <?php
    
                                                    $kategori = $mysqli->query("SELECT * FROM kategori");
                                                    while ($dataK = $kategori->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?= $dataK['id_kategori'] ?>"><?= $dataK['nama_kategori'] ?></option>
                                                        <?php
                                                    }
    
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">ISI DIALOG</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Lead Berita</label>
                                            <textarea name="lead" class="form-control" rows="10" placeholder="Masukkan Lead Berita" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <button type="submit" name="simpandialog" class="btn btn-block btn-success">Simpan</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>