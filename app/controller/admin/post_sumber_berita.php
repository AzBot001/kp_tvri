<?php

include 'app/controller/admin/function_sumber.php';
include 'app/flash_message.php';

if (isset($_POST['simpan_sumber_berita'])) {
    $sumber_berita = $_POST['nama_sumber_berita'];

    $query = $mysqli->query("INSERT INTO sumber_berita(nama_sumber_berita) VALUES ('$sumber_berita')");
    flash("msg_simpan_sumber_berita", "Data Berhasil Disimpan");
}
if (isset($_POST['edit_sumber_berita'])) {
    $sumber_berita = $_POST['nama_sumber_berita'];
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE sumber_berita SET nama_sumber_berita = '$sumber_berita' WHERE id_sumber_berita = '$id' ");
    flash("msg_edit_sumber_berita", "Data Berhasil Disimpan");
}
if (isset($_POST['hapus_sumber_berita'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM sumber_berita WHERE id_sumber_berita = '$id'");
    flash("msg_hapus_sumber_berita", "Data Berhasil Dihapus");
}
