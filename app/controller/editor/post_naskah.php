<?php
include 'app/controller/editor/function_naskah.php';
include 'app/flash_message.php';


if (isset($_POST['durasi'])) {
    $id = $_POST['id'];
  $h = $_POST['h'];
  $m = $_POST['m'];
  $s = $_POST['s'];
  $durasi = $h.':'.$m.':'.$s;

  $mysqli->query("UPDATE naskah SET durasi = '$durasi', sts_edit = '1' WHERE id_naskah = '$id'");
  flash('durasighi','Berhasil menambahkan durasi');
}
