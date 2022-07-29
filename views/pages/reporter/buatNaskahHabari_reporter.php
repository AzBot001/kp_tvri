<?php
include 'app/controller/reporter/post_naskahlipuu.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row ">

                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Referensi Berita - HABARI LO HULONTHALO</h3>
                        </div>
                        <div class="card-body">
                            <table class="table" id="dataTable">
                                <thead class="thead-light">
                                     <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Kameramen</th>
                                        <th>Reporter</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php habari_ghi($mysqli, $base_url) ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>