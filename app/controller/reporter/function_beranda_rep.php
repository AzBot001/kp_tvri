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
            <td><?= $data['jenis'] ?></td>
            <td>
                <?php
                if ($data['sts_periksa'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i>&nbsp;Periksa</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i>&nbsp;Periksa</div>
                <?php
                }
                ?>
                <br>
                <?php
                if ($data['sts_edit'] == '0') {
                ?>
                    <div class="badge badge-danger"><i class="fas fa-times"></i>&nbsp;Edit</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i>&nbsp;Edit</div>
                <?php
                }
                ?>
            </td>
        </tr>
<?php
    }
}
?>