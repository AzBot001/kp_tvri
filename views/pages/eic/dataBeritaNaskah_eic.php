<?php
include 'app/controller/eic/post_naskah.php';
// include 'app/controller/reporter/post_naskahghi.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h3>Data Naskah</h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Data Naskah
                        </div>
                        <div class="card-body">
                        <?php
                                    if (isset($_SESSION['durasighi'])) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('durasighi'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php
                                    }
                                    ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="ghi-tab" data-toggle="tab" href="#ghi" role="tab" aria-controls="ghi" aria-selected="true">GHI</a>
                                    <a class="nav-item nav-link" id="nav-GNS-tab" data-toggle="tab" href="#nav-GNS" role="tab" aria-controls="nav-GNS" aria-selected="false">GNS</a>
                                    <a class="nav-item nav-link" id="nav-habari-tab" data-toggle="tab" href="#nav-habari" role="tab" aria-controls="nav-habari" aria-selected="false">HABARI</a>
                                    <a class="nav-item nav-link" id="nav-sulampa-tab" data-toggle="tab" href="#nav-sulampa" role="tab" aria-controls="nav-sulampa" aria-selected="false">SULAMPA</a>
                                    <a class="nav-item nav-link" id="nav-dialog-tab" data-toggle="tab" href="#nav-dialog" role="tab" aria-controls="nav-dialog" aria-selected="false">DIALOG</a>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="ghi" role="tabpanel" aria-labelledby="ghi-tab">
                                    <br>
                                    
                                    <table id="dataTable" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Reporter</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_ghi($mysqli, $l_reporter, $base_url); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-GNS" role="tabpanel" aria-labelledby="nav-GNS-tab">
                                    <br>
                                    <table id="dataTable2" class="table ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Reporter</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_gns($mysqli, $base_url); ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-habari" role="tabpanel" aria-labelledby="nav-habari-tab">
                                    <br>
                                    <table id="dataTable3" class="table ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Reporter</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_lipuu($mysqli, $base_url); ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-sulampa" role="tabpanel" aria-labelledby="nav-sulampa-tab">
                                    <br>
                                    <table id="dataTable4" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Sumber</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_sulampa($mysqli, $base_url); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-dialog" role="tabpanel" aria-labelledby="nav-dialog-tab">
                                    <br>
                                    <table id="dataTable5" class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Narasumber</th>
                                                <th>Keterangan Narasumber</th>
                                                <th>Tanggal</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_dialog($mysqli, $base_url); ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>