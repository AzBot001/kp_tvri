<?php
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
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabel-naskah-ghi-tab" data-toggle="pill" href="#tabel-naskah-ghi" role="tab" aria-controls="tabel-naskah-ghi" aria-selected="true">GHI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-gns-tab" data-toggle="pill" href="#tabel-naskah-gns" role="tab" aria-controls="tabel-naskah-gns" aria-selected="false">GNS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-sulampa-tab" data-toggle="pill" href="#tabel-naskah-sulampa" role="tab" aria-controls="tabel-naskah-sulampa" aria-selected="false">SULAMPA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-lipuu-tab" data-toggle="pill" href="#tabel-naskah-lipuu" role="tab" aria-controls="tabel-naskah-lipuu" aria-selected="false">LIPU'U</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabel-naskah-lc-tab" data-toggle="pill" href="#tabel-naskah-lc" role="tab" aria-controls="tabel-naskah-lc" aria-selected="false">LIVE CROSS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="tabel-naskah-ghi" role="tabpanel" aria-labelledby="tabel-naskah-ghi-tab">
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
                                            <?php tampil_naskah_ghi($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-gns" role="tabpanel" aria-labelledby="tabel-naskah-gns-tab">
                                    <table id="dataTable2" class="table ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
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
                                <div class="tab-pane fade" id="tabel-naskah-sulampa" role="tabpanel" aria-labelledby="tabel-naskah-sulampa-tab">
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
                                <div class="tab-pane fade" id="tabel-naskah-lipuu" role="tabpanel" aria-labelledby="tabel-naskah-lipuu-tab">
                                    <table id="dataTable4" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_lipuu($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabel-naskah-lc" role="tabpanel" aria-labelledby="tabel-naskah-lc-tab">
                                    <table id="dataTable5" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kameramen</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php tampil_naskah_lc($mysqli); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
</div>