<?php

include 'app/controller/admin/function_kategori.php';
include 'app/flash_message.php';

if(isset($_POST['simpan_kategori'])){
    $kategori = $_POST['nama_kategori'];

    $query = $mysqli->query("INSERT INTO kategori(nama_kategori) VALUES ('$kategori')");
    flash("msg_simpan_kategori","Data Berhasil Disimpan");
}
if(isset($_POST['edit_kategori'])){
    $kategori = $_POST['nama_kategori'];
    $id = $_POST['id'];
    $query = $mysqli->query("UPDATE kategori SET nama_kategori = '$kategori' WHERE id_kategori = '$id' ");
    flash("msg_edit_kategori","Data Berhasil Disimpan");
}
if(isset($_POST['hapus_kategori'])){
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM kategori WHERE id_kategori = '$id'");
    flash("msg_hapus_kategori","Data Berhasil Dihapus");  
}
