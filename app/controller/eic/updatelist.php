<?php
include '../../env.php';
$arr = $_POST['arrayorder'];
?>
<div class="alert alert-success"><i class="fas fa-check"></i> Berhasil Mengubah Urutan</div>
<?php
if ($_POST['update'] == 'update') {
    $count = 1;
    foreach ($arr as $idval) {
        $mysqli->query("UPDATE detail_rundown SET urutan = '$count' WHERE id_detail_rundown = '$idval'");
      
     $count++;
    }
}
?>