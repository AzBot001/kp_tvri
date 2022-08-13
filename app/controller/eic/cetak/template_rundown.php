<?php
error_reporting(0);
$id = $_GET['id'];

include "../../../../app/env.php";
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

$query = $mysqli->query("SELECT * FROM rundown WHERE id_rundown = '$id'");
$dR = $query->fetch_assoc();
?>
<style media="print">
    div, table, b { 
        font-size: 12px;
    }
</style>
<table width="100%" style="font-size: 16px !important ;">
    <tr>
        <th>RUNDOWN</th>
    </tr>
    <tr>
        <th>
            <?php
            if ($dR['jenis'] == 'ghi') {
                echo 'GORONTALO HARI INI';
            } else if ($dR['jenis'] == 'gns') {
                echo 'GORONTALO NEWS SERVICE';
            } else {
                echo 'HABARI LO HULONDALO';
            }
            ?>
        </th>
    </tr>
    <tr>
        <th><?= tgl_indo($dR['tanggal']); ?></th>
    </tr>
</table>

<table cellpadding="3" border="1" width="100%" style="margin-top: 5px ; border-collapse:collapse; font-size: 9px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Berita</th>
            <th>ADO</th>
            <th>Dur</th>
            <th>Petugas / Sumber</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $n = 1;
        $query_detail = $mysqli->query("SELECT * FROM detail_rundown WHERE id_rundown = '$id' ORDER BY urutan ASC");
        while ($ddR = $query_detail->fetch_assoc()) {

        ?>
            <tr>
                <td><?= $n++ ?></td>
                <td>
                    <?php
                    if ($ddR['id_naskah_default'] == '0') {
                        $dff = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '{$ddR['id_naskah']}'");
                        $data = $dff->fetch_assoc();
                        echo $data['judul'];
                    } else {
                        $dff = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '{$ddR['id_naskah_default']}'");
                        $data = $dff->fetch_assoc();
                    ?>
                        <center> <b><?= $data['judul_naskah'] ?></b></center>
                    <?php
                    }
                    if ($ddR['id_naskah_default'] == '0' && $ddR['id_naskah'] == '0') {
                    ?>
                        <center> <b>Teaser</b></center>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($ddR['id_naskah_default'] == '0') {
                        $dff = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '{$ddR['id_naskah']}'");
                        $data = $dff->fetch_assoc();
                        $kat = $data['id_kategori'];
                        if ($data['jenis'] == 'sulampa') {
                            echo "SULAMPA";
                        }else{
                        $kategori = $mysqli->query("SELECT * FROM kategori WHERE id_kategori = '$kat'");
                        $data_kat = $kategori->fetch_assoc();
                        echo $data_kat['nama_kategori'];
                        }
                    } else {
                        echo '<b>TIM DESK</b>';
                    }
                    if ($ddR['id_naskah_default'] == '0' && $ddR['id_naskah'] == '0') {
                        echo '<b>TIM DESK</b>';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($ddR['id_naskah_default'] == '0' && empty($ddR['teaser'])) {
                        $dff = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '{$ddR['id_naskah']}'");
                        $data = $dff->fetch_assoc();
                        $times[] = $data['durasi'];
                        echo date('i:s', strtotime($data['durasi']));
                    } else {
                        echo '';
                    }

                    ?>
                </td>
                <td>
                    <?php
                    if ($ddR['id_naskah_default'] == '0' && empty($ddR['teaser'])) {
                        $dff = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '{$ddR['id_naskah']}'");
                        $data = $dff->fetch_assoc();
                        $kat = $data['id_kategori'];
                        if ($data['jenis'] == 'sulampa') {
                           $q = $mysqli->query("SELECT * FROM sumber_berita WHERE id_sumber_berita = '$kat'");
                           $qq = $q->fetch_assoc();
                           echo $qq['nama_sumber_berita'];
                        }else if ($data['jenis'] == 'dialog') {
                            $id_user = $data['id_user'];
                            $user = $mysqli->query("SELECT * FROM user WHERE id_user = '$id_user'");
                            $datauser = $user->fetch_assoc();
                            echo $datauser['nama_user'];
                        }
                        else{
                            $id_kameramen = $data['kameramen'];
                            $kameramen = $mysqli->query("SELECT * FROM user WHERE id_user = '$id_kameramen'");
                            $datakameramen = $kameramen->fetch_assoc();
                            echo $datakameramen['nama_user'];
                            echo '-';
                            $id_user = $data['id_user'];
                            $user = $mysqli->query("SELECT * FROM user WHERE id_user = '$id_user'");
                            $datauser = $user->fetch_assoc();
                            echo $datauser['nama_user'];
                        }
                       
                    } else {
                        echo '<b>TIM DESK</b>';
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3">Total Durasi</td>
            <td colspan="2">
                <?php echo AddPlayTime($times);?>
                <?php
                function AddPlayTime($times)
                {

                    // loop throught all the times
                    foreach ($times as $time) {
                        list($hour, $minute, $second) = explode(':', $time);
                        $all_seconds += $hour * 3600;
                        $all_seconds += $minute * 60;
                        $all_seconds += $second;
                    }


                    $total_minutes = floor($all_seconds / 60);
                    $seconds = $all_seconds % 60;
                    $hours = floor($total_minutes / 60);
                    $minutes = $total_minutes % 60;

                    // returns the time already formatted
                    return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
                }
                ?>
            </td>

        </tr>
    </tbody>
</table>
<div style="margin-top: 10px;">
    <b>Kerabat Kerja :</b>
    <?php
    $q_ker = $mysqli->query("SELECT * FROM kerabat_rundown WHERE id_rundown = '$id'");
    $d_ker = $q_ker->fetch_assoc();
    echo $d_ker['kerabat_kerja'];
   
    ?>
</div>
<div class="te" style="margin-top: 10px ;">
    <table width='100%'>
        <tr>
            <td>
                <div>
                    <b>
                        Mengetahui <br>
                        <?= $d_ker['jabatan1']; ?> <br><br><br><br><br>
                        <?= $d_ker['nama1'] ?><br>
                        NIP <?= $d_ker['nip1'] ?>

                    </b>
                </div>
            </td>
            <td>
                <div>
                    <b>
                        <br>
                        <?= $d_ker['jabatan2']; ?> <br><br><br><br><br>
                        <?= $d_ker['nama2'] ?><br>
                        NIP <?= $d_ker['nip2'] ?>

                    </b>
                </div>
            </td>
            <td>
                <div>
                    <b>
                        <br>
                        <?= $d_ker['jabatan3']; ?> <br><br><br><br><br>
                        <?= $d_ker['nama3'] ?><br>
                        NIP <?= $d_ker['nip3'] ?>

                    </b>
                </div>
            </td>
        </tr>
    </table>
</div>