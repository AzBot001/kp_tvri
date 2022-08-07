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
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    <label>Kerabat Kerja</label>
                                    <textarea name="kerabat" class="kerabat_kerja" cols="30" rows="10">
                                        <table cellpadding = "5">
                                        <?php
                                        $query = $mysqli->query("SELECT * FROM kerabat_kerja");
                                        while ($data = $query->fetch_assoc()) {
                                        ?>
                                                <tr>
                                                    <td><?= $data['jabatan'] ?></td>
                                                    <td>:</td>
                                                    <td><?= $data['nama'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                                ?>
                                        </table>
                                    </textarea>
                                    
                                    <div class="row">
                                    <?php
                                    $jb = 1;
                                    $nama = 1;
                                    $nip = 1;
                                    $ttdx = $mysqli->query("SELECT * FROM kerabat_kerja WHERE ttd = '1'");
                                    while ($d = $ttdx->fetch_assoc()) {
                                    ?>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input type="text" name="jabatan<?= $jb++ ?>" value="<?= $d['jabatan'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>Nama Pegawai</label>
                                                <input type="text" name="nama<?= $nama++ ?>" value="<?= $d['nama'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>NIP</label>
                                                <input type="text" name="nip<?= $nip++ ?>" value="<?= $d['nip'] ?>" class="form-control">
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                        </div>
                        <button name="simpan_kerabat" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>