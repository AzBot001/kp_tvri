<?php

include 'app/controller/admin/function_user.php';
include 'app/flash_message.php';

if (isset($_POST['simpan_user'])) {
    $nama = $_POST['nm_user'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $pass = md5('tvrinews123');
    $query = $mysqli->query("INSERT INTO user(id_user,nama_user,user,status_user,pass,level) VALUES ('','$nama','$username','Aktif','$pass','$level')");
    flash("msg_simpan_user", "Data User Berhasil Disimpan");
}

if (isset($_POST['reset'])) {
    $id = $_POST['id'];
    $pass = md5('tvrinews123');
    $query = $mysqli->query("UPDATE user SET pass = '$pass' WHERE id_user = '$id'");
    flash("msg_reset", "Password user berhasil direset");
}

if (isset($_POST['aktif'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE user SET status_user = 'Tidak Aktif' WHERE id_user = '$id'");
    flash("msg_aktif", "User berhasil dinonaktif");
}

if (isset($_POST['aktiff'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE user SET status_user = 'Aktif' WHERE id_user = '$id'");
    flash("msg_aktiff", "User berhasil diaktifkan");
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
