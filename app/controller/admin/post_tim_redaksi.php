<?php

include 'app/flash_message.php';
if(isset($_POST['simpan'])){
    $pj = $_POST['penanggung_jawab'];
    $pp = $_POST['pelaksana_produser'];
    $pb = $_POST['pelaksana_berita'];
    $cu = $_POST['pelaksana_cu'];
    $eic = $_POST['eic'];
    $rd = $_POST['redaktur'];
    $it = $_POST['petugas_it'];
    $pd = $_POST['pd_berita'];
    $fd = $_POST['fd_berita'];
    $ed = $_POST['editor'];
    $py = $_POST['penyiar'];

    $query = $mysqli->query("UPDATE setting_tim_redaksi SET penanggung_jawab = '$pj', pelaksana_produser = '$pp', pelaksana_berita = '$pb', eic = '$eic', redaktur = '$redaktur', pd_berita = '$pd', fd_berita = '$fd', editor = '$ed', petugas_it = '$it', penyiar = '$py', pelaksana_cu = '$cu', redaktur = '$rd' WHERE id = '1'");
    flash("msg_set", "Data Berhasil Disimpan");
}

?>