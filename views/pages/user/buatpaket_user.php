<?php
include 'app/controller/user/post_paket.php';

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <h3>Data Paket Acara</h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <h3 class="card-title">Data Paket</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Program</th>
                                    <th>Judul Paket</th>
                                    <th>Pengarah Acara</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tampil_paket($mysqli) ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>