<?php
include 'app/controller/admin/function_kerabat.php';
include 'app/flash_message.php';

if (isset($_POST['simpan'])) {
    $jabatan = $_POST['jabatan'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
   
    if (empty($_POST['ttd'])) {
       $ttd = 0;
    }else{
        $ttd = $_POST['ttd'];
    }

    $query = $mysqli->query("INSERT INTO kerabat_kerja VALUES (''   ,'$jabatan','$nama','$nip','$ttd')");
    flash('kerabat','Data Kerabat Berhasil Ditambahkan');
}

if (isset($_POST['hapus'])) {

    $id = $_POST['id'];
    $mysqli->query("DELETE FROM kerabat_kerja WHERE id = '$id'");
    flash('hps','Data Kerabat Berhasil Dihapus');

}

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
   
    if (empty($_POST['ttd'])) {
       $ttd = 0;
    }else{
        $ttd = $_POST['ttd'];
    }
    $query = $mysqli->query("UPDATE kerabat_kerja SET jabatan = '$jabatan', nama = '$nama', nip = '$nip', ttd = '$ttd' WHERE id = '$id' ");
    flash('edit','Data Kerabat Berhasi Diubah');
}




?>