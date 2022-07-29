<?php



function tampil_naskah_beranda($mysqli)
{
    $date = date('Y-m-d');
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM naskah JOIN user ON naskah.id_user = user.id_user WHERE tgl_berita = '$date' ");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td>
                <?php
                echo $data['nama_user'];
                ?>
            </td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diperiksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diperiksa</div>
                <?php
                }
                ?>

                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Diedit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Diedit</div>
                <?php
                }
                ?>
            </td>
        </tr>
<?php
    }
}
?>