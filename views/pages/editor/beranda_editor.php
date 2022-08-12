<?php
include 'app/controller/editor/function_beranda_edt.php';

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ml-1">
                <h3>Selamat Datang <?= $_SESSION['nama']?> - Editor</h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-6">
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

                            <p>Berita Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-kuning">
                        <div class="inner">
                            <h3>
                                <?php
                                $sql_beritaharini = $mysqli->query("SELECT * FROM naskah WHERE tgl_berita = '$date' AND sts_edit = '0'");
                                echo mysqli_num_rows($sql_beritaharini);
                                ?> 
                            </h3>

                            <p>Berita Belum Diedit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
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

                            <p>Sulampa Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-sm-12">
                    <div class="card">
                        <div class="card-header bg-dshbra">
                            <h3 class="card-title">
                                <i class="fas fa-list mr-2"></i>
                                Berita Hari Ini
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="max-height: 400px;">
                            <table class="table table-head-fixed text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Reporter</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
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
                <div class="col-lg-4">
                    <div class="calendar light">
                        <div class="calendar-header">
                            <span class="month-picker" id="month-picker">February</span>
                            <div class="year-picker">
                                <span class="year-change text-white" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2021</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Minggu</div>
                                <div>Senin</div>
                                <div>Selasa</div>
                                <div>Rabu</div>
                                <div>Kamis</div>
                                <div>Jumat</div>
                                <div>Sabtu</div>
                            </div>
                            <div class="calendar-days"></div>
                        </div>
                        <div class="month-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>