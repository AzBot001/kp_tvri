<?php
$l_reporter = $_SESSION['id'];
include 'app/controller/reporter/post_naskah.php';
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
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="ghi-tab" data-toggle="tab" href="#ghi" role="tab" aria-controls="ghi" aria-selected="true">GHI</a>
                                    <a class="nav-item nav-link" id="nav-GNS-tab" data-toggle="tab" href="#nav-GNS" role="tab" aria-controls="nav-GNS" aria-selected="false">GNS</a>
                                    <a class="nav-item nav-link" id="nav-sulampa-tab" data-toggle="tab" href="#nav-sulampa" role="tab" aria-controls="nav-sulampa" aria-selected="false">SULAMPA</a>
                                    <a class="nav-item nav-link" id="nav-dialog-tab" data-toggle="tab" href="#nav-dialog" role="tab" aria-controls="nav-dialog" aria-selected="false">DIALOG</a>
                                    <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab" href="#nav-live" role="tab" aria-controls="nav-live" aria-selected="false">LIVE CROSS</a>
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
                                            <?php tampil_naskah_ghi($mysqli,$l_reporter); ?>
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
                                            <?php tampil_naskah_gns($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-sulampa" role="tabpanel" aria-labelledby="nav-sulampa-tab">
                                    <br>
                                    <table id="dataTable3" class="table">
                                        <thead>
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
                                            <?php tampil_naskah_sulampa($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-dialog" role="tabpanel" aria-labelledby="nav-dialog-tab">
                                <br>
                                    <table id="dataTable3" class="table">
                                        <thead>
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
                                            <?php tampil_naskah_dialog($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-live" role="tabpanel" aria-labelledby="nav-live-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>