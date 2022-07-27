<?php

include 'app/controller/eic/function_naskah.php';
include 'app/flash_message.php';

if (isset($_POST['simpan_paket'])) {
    $program_paket = $_POST['program_paket'];
    $judul_paket = $_POST['judul_paket'];
    $pengarah_acara = $_POST['pengarah_acara'];
    $status = $_POST['pengarah_acara'];
    $query = $mysqli->query("INSERT INTO paket(id_paket,program_paket,judul_paket,pengarah_acara,status) VALUES ('','$program_paket','$judul_paket','$pengarah_acara','$status')");
    flash("msg_simpan", "Data Paket Berhasil Disimpan");
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM paket WHERE id_paket = '$id'");
    flash("msg_hapus", "Paket berhasil dihapus");
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $program_paket = $_POST['program_paket'];
    $judul_paket = $_POST['judul_paket'];
    $pengarah_acara = $_POST['pengarah_acara'];
    $status = $_POST['pengarah_acara'];
    $query = $mysqli->query("UPDATE paket SET program_paket = '$program_paket',judul_paket = '$judul_paket', pengarah_acara = '$pengarah_acara', status = '$pengarah_acara'  WHERE id_paket = '$id'");
    flash("msg_edit", "Data Paket berhasil diubah");
}
