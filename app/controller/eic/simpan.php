<?php

include '../../env.php';

$id = $_POST['idD'];
$idlast= $_POST['idlast'];
$mysqli->query("INSERT INTO detail_rundown VALUES ('','$idlast','','$id','','')");

?>