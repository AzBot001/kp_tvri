<?php

include 'app/controller/reporter/function_naskahlc.php';
include 'app/flash_message.php';

if (isset($_POST['simpanlc'])) {
    $judul = $_POST['judul'];
    $lokasi = $_POST['lokasi'];
    $kameramen = $_POST['kameramen'];
    $tgl_berita = $_POST['tgl_berita'];
    $kategori = $_POST['kategori'];
    $bobot = $_POST['bobot'];
    $lead = $_POST['lead'];
    $narasi = $_POST['narasi'];
    $su = $_POST['su'];
    $narasi_soundup = $_POST['narasi_soundup'];
    $jenis = $_POST['jenis'];
    $sts_periksa = $_POST['sts_periksa'];
    $stss_edit = $_POST['sts_edit'];
    // print_r($narasi_soundup);
    $jumlah_su = count($su) - 1;

    $query = $mysqli->query("INSERT INTO naskah VALUES ('','$judul','$lokasi','$kameramen','$tgl_berita','$kategori','$bobot','$lead','$narasi','$jenis','$sts_periksa','$stss_edit')");
    $last_id = $mysqli->insert_id;

    for ($i = 0; $i < $jumlah_su; $i++) {

        $query_detail = $mysqli->query("INSERT INTO detail_naskah VALUES ('','$last_id','$su[$i]','$narasi_soundup[$i]')");
    }

?>
   
    <?php
    flash("msg_simpan_ghi", "Data Berhasi Disimpan");
}

    ?>