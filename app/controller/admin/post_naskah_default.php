<?php

include 'app/controller/admin/function_naskah_default.php';
include 'app/flash_message.php';

if(isset($_POST['simpan_naskah_default'])){
    $judul = $_POST['judul_naskah'];
    $narasi = $_POST['narasi_default'];

    $query = $mysqli->query("INSERT INTO naskah_default(judul_naskah,narasi) VALUES ('$judul','$narasi')");
    flash("msg_simpan_naskah_default","Data Berhasil Disimpan");
}
if(isset($_POST['edit_naskah_default'])){
    $judul = $_POST['judul_naskah'];
    $narasi = $_POST['narasi_default'];
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE naskah_default SET judul_naskah = '$judul', narasi = '$narasi' WHERE id_naskahdefault = '$id' ");
    flash("msg_edit_naskah_default","Data Berhasil Disimpan");
}
if(isset($_POST['hapus_naskah_default'])){
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah_default WHERE id_naskahdefault = '$id'");
    flash("msg_hapus_naskah_default","Data Berhasil Dihapus");  
}
?>