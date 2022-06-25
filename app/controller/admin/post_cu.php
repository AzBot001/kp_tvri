<?php

include 'app/controller/admin/function_cu.php';
include 'app/flash_message.php';

if (isset($_POST['simpan_program_cu'])) {
    $program_cu = $_POST['nama_program_cu'];

    $query = $mysqli->query("INSERT INTO program_cu(nama_program_cu) VALUES ('$program_cu')");
    flash("msg_simpan_program_cu", "Data Berhasil Disimpan");
}
if (isset($_POST['edit_program_cu'])) {
    $program_cu = $_POST['nama_program_cu'];
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE program_cu SET nama_program_cu = '$program_cu' WHERE id_program_cu = '$id' ");
    flash("msg_edit_program_cu", "Data Berhasil Disimpan");
}
if (isset($_POST['hapus_program_cu'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM program_cu WHERE id_program_cu = '$id'");
    flash("msg_hapus_program_cu", "Data Berhasil Dihapus");
}
