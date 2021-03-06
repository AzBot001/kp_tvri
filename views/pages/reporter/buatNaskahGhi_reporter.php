<?php
include 'app/controller/reporter/post_naskahghi.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <button type="button" data-toggle="modal" data-target="#ref" class="btn btn-warning btn-md btn-flat mb-3 mt-3 text-white">
            <i class="fas fa-eye fa-md  mr-2"></i>
                Lihat Refrensi Naskah
            </button>
              
            
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">NASKAH GORONTALO HARI INI</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="hidden"name="id_user" value="<?= $_SESSION['id'] ?>">
                                            <input name="judul" type="text" class="form-control" placeholder="Masukkan Judul Berita">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input name="lokasi" type="text" class="form-control" placeholder="Masukkan Lokasi Berita">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Kameramen</label>
                                            <select name="kameramen" class="form-control select2bs4" style="width: 100%;">
                                                <option hidden>-Pilih Kameramen-</option>
                                                <?php

                                                $kameramen = $mysqli->query("SELECT * FROM user WHERE level != '0'");
                                                while ($data = $kameramen->fetch_assoc()) {
                                                ?>
                                                    <option value="<?= $data['id_user'] ?>"><?= $data['nama_user'] ?></option>
                                                <?php
                                                }

                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label>Tanggal Berita</label>
                                        <input name="tgl_berita" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Berita" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Kategori Berita</label>
                                            <select class="form-control" name="kategori">
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
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Bobot Berita</label>
                                            <select class="form-control" name="bobot">
                                                <option hidden>--Masukkan Bobot Berita--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">ISI BERITA</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Lead Berita</label>
                                            <textarea name="lead" class="form-control" rows="10" placeholder="Masukkan Lead Berita"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Narasi Berita</label>
                                            <textarea name="narasi" class="form-control" rows="10" placeholder="Masukkan Narasi Berita"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="after-add-more mb-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-warning text-white add-more"><i class="fas fa-plus-circle"></i> Soundup</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="copy" style="display: none;">
                                    <div class="control-group">
                                        <div class="row mb-2">
                                            <div class="col-8">
                                                <label>Sound Up</label>
                                                <input type="text" class="form-control col-2 mb-1" name="u[]" placeholder="urutan">
                                                <input type="text" name="su[]" placeholder="Masukan Soundup" class="form-control">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <label>Narasi</label>
                                                <textarea class="form-control" rows="10" name="narasi_soundup[]"></textarea>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-danger remove"><i class="fas fa-trash"></i> SoundUp</button>
                                        <hr>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <button type="submit" name="simpanghi" class="btn btn-block btn-success">Simpan</button>
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

<div class="modal fade" id="ref" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Referensi Naskah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="dataTable">
           <thead class="thead-light">
             <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Petugas</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Aksi</th>
             </tr>
           </thead>
           <tbody>
             <?php tampil_ref_ghi($mysqli,$base_url) ?>
           </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>