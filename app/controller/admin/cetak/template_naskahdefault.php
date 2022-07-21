<?php
$id = $_GET['id'];

include "../../../../app/env.php";
$query = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '$id'");
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
    <title>Cetak Naskah Default</title>
</head>
<style>
    td {
        line-height: 27px;
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
            <td>30 Juniiiii</td>
        </tr>
        <tr>
            <td><b>TIM DESK</b></td>
        </tr>
        <tr>
            <td rowspan="2" valign="top">
                <h4><?= $d['judul_naskah'] ?></h4>
            </td>
    </table>

    <br>
    <table border="0" style="width:100%;border:1px solid #000; padding:3px; border-collapse:collapse;" cellpadding="3">
        <tr>
            <th style="width: 20% ;border:1px solid #000;">VIDEO</th>
            <th style="width: 80% ;border:1px solid #000;">AUDIO</th>
        </tr>

        <tr>
            <td valign="top" style="border-right:1px solid #000;">PENYIAR</td>
            <td valign="top">
                <div>
                    <?= $d['narasi'] ?>
                </div>
            </td>
        </tr>


    </table>
</body>

</html>