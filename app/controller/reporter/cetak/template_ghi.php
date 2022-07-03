<?php
$id = $_GET['id'];

include "../../../../app/env.php";
$query = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '$id'");
$d = $query->fetch_assoc();

$kameramen = $mysqli->query("SELECT * FROM user WHERE id_user = '{$d['kameramen']}'");
$k = $kameramen->fetch_assoc();

$reporter = $mysqli->query("SELECT * FROM user WHERE id_user = '{$d['id_user']}'");
$r = $reporter->fetch_assoc();
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Naskah <?= $d['judul'] ?></title>
</head>
<style>
    td {
        line-height: 25px;
    }
</style>

<body>
    <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
        <tr>
            <td rowspan="2">
                <h3>TELEVISI RI STASIUN GORONTALO</h3>
            </td>
            <td>Tanggal</td>
            <td>:</td>
            <td><?= tgl_indo($d['tgl_berita']) ?></td>
        </tr>
        <tr>
            <td>Reporter</td>
            <td>:</td>
            <td><?= $r['nama_user'] ?></td>
        </tr>
        <tr>
            <td rowspan="2" valign="top">
                <h5>JDL : <?= $d['judul'] ?></h5>
            </td>
            <td>Kameramen</td>
            <td>:</td>
            <td><?= $k['nama_user'] ?></td>
        </tr>
        <tr>
            <td>Prakarsa</td>
            <td>:</td>
            <td><?= $d['lokasi'] ?></td>
        </tr>
    </table>


    <table border="0" style="width:100%;border:1px solid #000; padding:3px; border-collapse:collapse;" cellpadding="1">
        <tr>
            <th style="width: 30% ;border:1px solid #000;">VIDEO</th>
            <th style="width: 70% ;border:1px solid #000;">AUDIO</th>
        </tr>

        <tr>
            <td valign="top" style="border-right:1px solid #000;">PENYIAR</td>
            <td valign="top"><?= $d['lead'] ?></td>
        </tr>
        <tr>
            <td style="border-right:1px solid #000;">COMP.STAR</td>
            <td align="center">---------------------- VO ----------------------</td>
        </tr>
        <tr>
            <td valign="top" style="border-right:1px solid #000;"></td>
            <td valign="top"><?= $d['naskah'] ?></td>
        </tr>

        <?php

        $su = $mysqli->query("SELECT * FROM detail_naskah WHERE id_naskah = '{$d['id_naskah']}' ORDER BY urutan ASC");
        while ($dsu = $su->fetch_assoc()) {
        ?>
            <tr>
                <td rowspan="2" valign="top" style="border-right:1px solid #000;"><?= $dsu['su'] ?></td>
                <td align="center"> ========= SOUND UP =========</td>
            </tr>
            <tr>
                <td>
                    <?= $dsu['naskah_su'] ?>
                </td>
            </tr>
        <?php
        }

        ?>


    </table>
</body>

</html>