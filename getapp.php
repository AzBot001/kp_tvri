<?php
// session_start();
$id = $_SESSION['id'];
$query = $mysqli->query("SELECT * FROM user WHERE id_user = '$id'");
$us = $query->fetch_assoc();

$nama_user = $us['nama_user'];
$username_user = $us['user'];
$password_user = $us['pass'];
$id_us = $us['id_user'];


?>