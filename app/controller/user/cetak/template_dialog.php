<?php
$id = $_GET['id'];

include "../../../../app/env.php";
$query = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '$id'");
$d = $query->fetch_assoc();

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
        line-height: 26px;
    }
</style>

<body>
    <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
        <tr>
            <td rowspan="2" style="width: 47%;">
                <h3>TELEVISI RI STASIUN GORONTALO</h3>
            </td>
            <td>Tanggal</td>
            <td>:</td>
            <td><?= tgl_indo($d['tgl_berita']) ?></td>
        </tr>
        <tr>
            <td>Nama Narasumber</td>
            <td>:</td>
            <td><?= $d['narasumber'] ?></td>
        </tr>
        <tr>
            <td rowspan="2" valign="top">
                <h5>JDL : <?= $d['judul'] ?></h5>
            </td>
            <td>Keterangan Narsum</td>
            <td>:</td>
            <td><?= $d['ket_narsum'] ?></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><?= $d['nomorhp_narsum'] ?></td>
        </tr>
    </table>


    <div>
        <p><?= $d['lead'] ?></p>
    </div>

</body>

</html>