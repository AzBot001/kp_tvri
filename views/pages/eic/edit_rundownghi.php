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
                          
                            <?php
                           
                                $id = $_GET['id'];
                                $query = $mysqli->query("SELECT * FROM rundown WHERE id_rundown = '$id'");
                                $data_awal = $query->fetch_assoc();
                                $t = $data_awal['tanggal'];
                                
                                
                                $nomor = 1;
                                $tanggal = $mysqli->query("SELECT * FROM naskah WHERE (tgl_berita = '$t') AND (jenis = 'ghi' || jenis = 'sulampa' || jenis = 'dialog') AND (sts_periksa = '1' AND sts_edit = '1') ORDER BY bobot DESC");
                                $cek = mysqli_num_rows($tanggal);
                                if ($cek < 1) {
                                    ?>
                                    <script>
                                    alert("Tidak ada naskah yang terdaftar ditanggal tersebut");   
                                    </script>
                                   <?php
                                } else {
                                    $cek_2 = $mysqli->query("SELECT * FROM rundown WHERE (tanggal = '$t') AND (jenis = 'ghi')");
                                    $check = mysqli_num_rows($cek_2);

                                    
                                    while ($data = $tanggal->fetch_assoc()) {
                                        $array[] = $data['id_naskah'];
                                    }

                                    $jumlah = count($array);

                                    $insert_rundown = $mysqli->query("INSERT INTO rundown VALUES('','$t','ghi')");
                                    $id_last = $mysqli->insert_id;


                                    $no = 1;
                                    for ($i = 0; $i < $jumlah; $i++) {
                                        $insert_detail = $mysqli->query("INSERT INTO detail_rundown VALUES ('','$id_last','$array[$i]','','','$i')");
                                    }
                                    $mysqli->query("DELETE FROM rundown WHERE id_rundown = '$id'");
                                    $mysqli->query("DELETE FROM detail_rundown WHERE id_rundown = '$id'");
                                    $mysqli->query("DELETE FROM kerabat_rundown WHERE id_rundown = '$id'");
                            ?>
                                    <div id="list">
                                    </div>
                                    <div class="dropdown show mt-3 float-right">
                                    <a href="<?= $base_url ?>dataBeritaRundown_eic_next<?= $id_last ?>" class="btn btn-success">Selanjutnya</a>   
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tambah Data
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                            <?php
                                            $xx = 1;
                                            $def = $mysqli->query("SELECT * FROM naskah_default WHERE jenis = '1' || jenis = '4'");
                                            while ($rowD = $def->fetch_assoc()) {
                                            ?>
                                                <form action="" id="form-input<?= $rowD['id_naskahdefault'] ?>">
                                                    <input type="hidden" name="idlast" value="<?= $id_last ?>">
                                                    <input type="hidden" name="idD" value="<?= $rowD['id_naskahdefault'] ?>">
                                                    <button class="list-group-item list-group-item-action" id="tombol-simpan<?= $rowD['id_naskahdefault'] ?>" type="submit"><?= $rowD['judul_naskah'] ?></button>
                                                </form>
                                                <?php
                                                ?>
                                                <script>
                                                    $(document).ready(function() {
                                                        update();
                                                    });
                                                    $("#tombol-simpan<?= $rowD['id_naskahdefault'] ?>").click(function() {

                                                        $.ajax({
                                                            type: 'POST',
                                                            url: "<?= $base_url ?>app/controller/eic/simpan.php",
                                                             data: $('#form-input<?= $rowD['id_naskahdefault'] ?>').serialize(),
                                                            success: function() {
                                                                //setelah simpan data, update data terbaru
                                                                update()
                                                            }
                                                        });
                                                        return false;
                                                    });

                                                    //fungsi tampil data
                                                    function update() {
                                                        $.ajax({
                                                            url: '<?= $base_url ?>app/controller/eic/show.php',
                                                            type: 'POST',
                                                            data: {
                                                                idl: '<?= $id_last ?>'
                                                            },
                                                            success: function(data) {
                                                                $('#list').html(data);
                                                            }
                                                        });
                                                    }
                                                </script>

                                            <?php

                                            }
                                            ?>

                                            <button class="list-group-item list-group-item-action" data-toggle="modal" data-target="#teaser" type="button">Teaser</button>


                                        </div>
                                    </div>
                                    <div class="modal fade" id="teaser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <form action="" id="form-teaser">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Teaser</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" id="form-teaser">
                                                            <input type="hidden" name="idlast" value="<?= $id_last ?>">
                                                            <textarea name="naskah_teaser" class="form-control teaser" cols="30" rows="10"></textarea>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                        <button type="submit" id="button-teaser" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $("#button-teaser").click(function() {

                                            $.ajax({
                                                type: 'POST',
                                                url: "<?= $base_url ?>app/controller/eic/teaser.php",
                                                data: $('#form-teaser').serialize(),
                                                success: function() {
                                                    //setelah simpan data, update data terbaru
                                                    update()
                                                }
                                            });
                                            return false;
                                        });
                                    </script>




                            <?php
                                }
                            
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>