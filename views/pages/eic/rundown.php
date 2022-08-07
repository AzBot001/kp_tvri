<?php
include 'app/controller/eic/post_naskah.php';
// include 'app/controller/reporter/post_naskahghi.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h3><?= $title ?></h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <?= $title ?>
                        </div>
                        <div class="card-body">
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_rndwn($mysqli,$base_url); ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>