<?php
include 'app/controller/reporter/function_naskah.php';
include 'app/flash_message.php';

if (isset($_POST['hapus_ghi'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_ghi","Data Naskah GHI berhasil dihapus");
}
if (isset($_POST['hapus_gns'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_gns","Data Naskah GNS berhasil dihapus");
}
?>