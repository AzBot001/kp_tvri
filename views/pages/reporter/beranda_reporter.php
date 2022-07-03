<?php
include 'app/controller/reporter/function_beranda_rep.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ml-1">
                <h3>Selamat Datang <?= $_SESSION['nama'] ?></h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-biru">
                        <div class="inner">
                            <h3>
                                <?php
                                $date = date('Y-m-d');
                                $sql_beritaharini = $mysqli->query("SELECT * FROM naskah WHERE tgl_berita = '$date'");
                                echo mysqli_num_rows($sql_beritaharini);
                                ?>
                            </h3>

                            <p>Jumlah Berita Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-kuning">
                        <div class="inner">
                            <h3>
                                <?php
                                $date = date('Y-m-d');
                                $sql_beritahariniR = $mysqli->query("SELECT * FROM naskah WHERE tgl_berita = '$date'");
                                echo mysqli_num_rows($sql_beritahariniR);
                                ?>
                            </h3>

                            <p>Jumlah Berita Kamu Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-coklat">
                        <div class="inner">
                            <h3>
                                <?php
                                $date = date('Y-m-d');
                                $slmp = $mysqli->query("SELECT * FROM naskah WHERE tgl_berita = '$date' AND jenis = 'sulampa' ");
                                echo mysqli_num_rows($slmp);
                                ?>
                            </h3>

                            <p>Jumlah Sulampa Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-hijau">
                        <div class="inner">
                            <h3>
                                <?php
                                $date = date('Y-m-d');
                                $slmp = $mysqli->query("SELECT * FROM naskah WHERE tgl_berita = '$date' AND jenis != 'sulampa' AND sts_edit='1' ");
                                echo mysqli_num_rows($slmp);
                                ?>
                            </h3>

                            <p>Jumlah Berita Sudah Diedit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">BERITA HARI INI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Petugas</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php tampil_naskah_beranda($mysqli); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DATA RUNDOWN</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Program</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Gorontalo Hari Ini
                                        </td>
                                        <td>
                                            Rabu, 15 Juni 2022
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>