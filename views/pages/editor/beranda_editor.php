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

                            <p>Jumlah Berita Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-kuning">
                        <div class="inner">
                            <h3>10</h3>

                            <p>Jumlah Berita Yang Kamu Buat Hari Ini</p>
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

                            <p>Jumlah Sulampa Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>