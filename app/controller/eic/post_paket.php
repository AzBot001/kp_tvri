<?php

include 'app/controller/eic/function_naskah.php';
include 'app/flash_message.php';

if (isset($_POST['simpan_paket'])) {
    $program_paket = $_POST['program_paket'];
    $judul_paket = $_POST['judul_paket'];
    $pengarah_acara = $_POST['pengarah_acara'];
    $status = $_POST['status'];
    $query = $mysqli->query("INSERT INTO paket VALUES ('','$program_paket','$judul_paket','$pengarah_acara','$status')");
    flash("msg_simpan", "Data Paket Berhasil Disimpan");
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM user WHERE id_user = '$id'");
    flash("msg_hapus", "User berhasil dihapus");
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nm_user'];
    $level = $_POST['level'];
    $query = $mysqli->query("UPDATE user SET nama_user = '$nama',level = '$level' WHERE id_user = '$id'");
    flash("msg_edit", "Data user berhasil diubah");
}
