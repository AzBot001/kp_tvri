<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "tvri_habari");

$mysqli = new mysqli(HOST, USER, PASS, DBNAME);
if ($mysqli->connect_error) {
    die("KONEKSI GAGAL: " . $mysqli->connect_error);
}
