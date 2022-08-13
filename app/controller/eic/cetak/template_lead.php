<?php
error_reporting(0);
include "../../../../app/env.php";

$id = $_GET['id'];
$rndwn = $mysqli->query("SELECT * FROM rundown WHERE id_rundown = '$id'");
$drndwn = $rndwn->fetch_assoc();

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
<style media="print">
    div, table, b { 
        font-size: 12px;
    }
</style>
<table width="100%" style="font-size: 16px !important ;">
    <tr>
        <th>LEAD PENYIAR</th>
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
        <th><?= tgl_indo($drndwn['tanggal']); ?></th>
    </tr>
</table><br>
<table border="0" cellpadding="0">
    <?php
    $nox = 1;
    $query_naskah_awal = $mysqli->query("SELECT * FROM detail_rundown WHERE id_rundown = '$id' ORDER BY urutan ASC");
    while ($dR = $query_naskah_awal->fetch_assoc()) {
        $id_naskah = $dR['id_naskah'];
        $id_naskah_default = $dR['id_naskah_default'];
        $teaser = $dR['teaser'];
    ?>
        <tr>
            <td width="5%" valign='top'><?= $nox++ . '. ' ?></td>
            <td>
                <b>
                <?php

                if ($id_naskah != '0' && $id_naskah_default == '0' && empty($teaser)) {
                    $naskah = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '$id_naskah'");
                    $data_naskah = $naskah->fetch_assoc();
                    echo $data_naskah['judul'];
                }
                if ($id_naskah == '0' && $id_naskah_default != '0' && empty($teaser)) {
                    $naskah_d = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '$id_naskah_default'");
                    $data_naskah_d = $naskah_d->fetch_assoc();
                    echo $data_naskah_d['judul_naskah'];
                }
                if ($id_naskah == '0' && $id_naskah_default == '0' && !empty($teaser)) {
                    echo 'Teaser';
                }

                ?>
                </b>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                 if ($id_naskah != '0' && $id_naskah_default == '0' && empty($teaser)) {
                    $naskah = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '$id_naskah'");
                    $data_naskah = $naskah->fetch_assoc();
                    echo $data_naskah['lead'];
                }
                if ($id_naskah == '0' && $id_naskah_default != '0' && empty($teaser)) {
                    $naskah_d = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '$id_naskah_default'");
                    $data_naskah_d = $naskah_d->fetch_assoc();
                    echo $data_naskah_d['narasi'];
                }
                if ($id_naskah == '0' && $id_naskah_default == '0' && !empty($teaser)) {
                    echo $teaser;
                }
                ?>
            </td>
        </tr>
        <br><br>
        <?php

        ?>
    <?php

    }
    ?>
</table>