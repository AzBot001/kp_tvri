<?php

include '../../env.php';

$id = $_POST['naskah_teaser'];
$idlast= $_POST['idlast'];
$mysqli->query("INSERT INTO detail_rundown VALUES ('','$idlast','','','$id','')");

?>