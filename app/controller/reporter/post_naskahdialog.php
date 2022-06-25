<?php

include 'app/controller/reporter/function_naskahdialog.php';
include 'app/flash_message.php';

if (isset($_POST['simpandialog'])) {
    $judul = $_POST['judul'];
    $tgl_berita = $_POST['tgl_berita'];
    $kategori = $_POST['kategori'];
    $bobot = '4';
    $lead = $_POST['lead'];
    $jenis = 'dialog';
    $sts_periksa = $_POST['sts_periksa'];
    $stss_edit = $_POST['sts_edit'];
    $id = $_POST['id_user'];
    $narsum = $_POST['narasumber'];
    $ket_narsum = $_POST['ket_narsum'];
    $nohp_narsum = $_POST['nomorhp_narsum'];

    $query = $mysqli->query("INSERT INTO naskah VALUES ('','$judul','','','$tgl_berita','$kategori','$bobot','$lead','','$jenis','$sts_periksa','$stss_edit','$id', '$narsum', '$ket_narsum', '$nohp_narsum')");
 

?>
    <script>
        document.location.href = '<?= $base_url ?>dataBeritaNaskah_reporter';
    </script>
<?php

}

?>
