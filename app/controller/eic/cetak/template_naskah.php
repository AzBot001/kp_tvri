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

$query_naskah_awal = $mysqli->query("SELECT * FROM detail_rundown WHERE id_rundown = '$id' ORDER BY urutan ASC");
while ($dR = $query_naskah_awal->fetch_assoc()) {
    $id_naskah = $dR['id_naskah'];
    $id_naskah_default = $dR['id_naskah_default'];
    $teaser = $dR['teaser'];

    if ($id_naskah != '0' && $id_naskah_default == '0' && empty($teaser)) {
        $query_naskah = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '$id_naskah'");
        $data_naskah = $query_naskah->fetch_assoc();
       
        if ($data_naskah['jenis'] == 'GHI' || $data_naskah['jenis'] == 'GNS' || $data_naskah['jenis'] == 'HABARI') {
            $kameramen = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data_naskah['kameramen']}'");
            $k = $kameramen->fetch_assoc();

            $reporter = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data_naskah['id_user']}'");
            $r = $reporter->fetch_assoc();

?>
            <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
                <tr>
                    <td rowspan="2">
                        <h3>TELEVISI RI STASIUN GORONTALO</h3>
                    </td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?= tgl_indo($data_naskah['tgl_berita']) ?></td>
                </tr>
                <tr>
                    <td>Reporter</td>
                    <td>:</td>
                    <td><?= $r['nama_user'] ?></td>
                </tr>
                <tr>
                    <td rowspan="2" valign="top">
                        <h5>JDL : <?= $data_naskah['judul'] ?></h5>
                    </td>
                    <td>Kameramen</td>
                    <td>:</td>
                    <td><?= $k['nama_user'] ?></td>
                </tr>
                <tr>
                    <td>Prakarsa</td>
                    <td>:</td>
                    <td><?= $data_naskah['lokasi'] ?></td>
                </tr>
            </table>
            <table border="0" style="width:100%;border:1px solid #000; padding:3px; border-collapse:collapse;" cellpadding="3">
                <tr>
                    <th style="width: 25% ;border:1px solid #000;">VIDEO</th>
                    <th style="width: 75% ;border:1px solid #000;">AUDIO</th>
                </tr>

                <tr>
                    <td valign="top" style="border-right:1px solid #000;">PENYIAR</td>
                    <td valign="top"><?= $data_naskah['lead'] ?></td>
                </tr>
                <tr>
                    <td style="border-right:1px solid #000;">COMP.STAR</td>
                    <td align="center">---------------------- VO ----------------------</td>
                </tr>
                <tr>
                    <td valign="top" style="border-right:1px solid #000;"></td>
                    <td valign="top"><?= $data_naskah['naskah'] ?></td>
                </tr>

                <?php

                $su = $mysqli->query("SELECT * FROM detail_naskah WHERE id_naskah = '{$data_naskah['id_naskah']}' ORDER BY urutan ASC");
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

        <?php
        } else if ($data_naskah['jenis'] == 'SULAMPA') {
            $dkg = $data_naskah['id_kategori'];
            $query_sumber = $mysqli->query("SELECT * FROM sumber_berita WHERE id_sumber_berita = '$dkg' ");
            $kg = $query_sumber->fetch_assoc();
        ?>
            <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
                <tr>
                    <td rowspan="2">
                        <h3>TELEVISI RI STASIUN GORONTALO</h3>
                    </td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?= tgl_indo($data_naskah['tgl_berita']);?></td>
                </tr>
                <tr>
                    <td>Rep / Cam</td>
                    <td>:</td>
                    <td><?= $data_naskah['kameramen'] ?></td>
                </tr>
                <tr>
                    <td rowspan="2" valign="top">
                        <h5>JDL : <?= $data_naskah['judul'] ?></h5>
                    </td>
                    <td>Sumber Berita</td>
                    <td>:</td>
                    <td><?= $kg['nama_sumber_berita'] ?></td>
                </tr>
                <tr>
                    <td>Prakarsa</td>
                    <td>:</td>
                    <td><?= $data_naskah['lokasi'] ?></td>
                </tr>
            </table>
            <table border="0" style="width:100%;border:1px solid #000; padding:3px; border-collapse:collapse;" cellpadding="3">
                <tr>
                    <th style="width: 25% ;border:1px solid #000;">VIDEO</th>
                    <th style="width: 75% ;border:1px solid #000;">AUDIO</th>
                </tr>

                <tr>
                    <td valign="top" style="border-right:1px solid #000;">PENYIAR</td>
                    <td valign="top"><?= $data_naskah['lead'] ?></td>
                </tr>
                <tr>
                    <td style="border-right:1px solid #000;">COMP.STAR</td>
                    <td align="center">---------------------- VO ----------------------</td>
                </tr>
                <tr>
                    <td valign="top" style="border-right:1px solid #000;"></td>
                    <td valign="top"><?= $data_naskah['naskah'] ?></td>
                </tr>

                <?php

                $su = $mysqli->query("SELECT * FROM detail_naskah WHERE id_naskah = '{$data_naskah['id_naskah']}' ORDER BY urutan ASC");
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
        <?php
        } else if ($data_naskah['jenis'] == 'DIALOG') {
        ?>
            <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
                <tr>
                    <td rowspan="2" style="width: 47%;">
                        <h3>TELEVISI RI STASIUN GORONTALO</h3>
                    </td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?= tgl_indo($data_naskah['tgl_berita']) ?></td>
                </tr>
                <tr>
                    <td>Nama Narasumber</td>
                    <td>:</td>
                    <td><?= $data_naskah['narasumber'] ?></td>
                </tr>
                <tr>
                    <td rowspan="2" valign="top">
                        <h5>JDL : <?= $data_naskah['judul'] ?></h5>
                    </td>
                    <td>Keterangan Narsum</td>
                    <td>:</td>
                    <td><?= $data_naskah['ket_narsum'] ?></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><?= $data_naskah['nomorhp_narsum'] ?></td>
                </tr>
            </table>


            <div>
                <p><?= $data_naskah['lead'] ?></p>
            </div>
        <?php
        } 
        ?>
        <pagebreak>
        <?php

    }


    if ($id_naskah == '0' && $id_naskah_default != '0' && empty($teaser)) {
        $query_naskahd = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '$id_naskah_default'");
        $d_naskah = $query_naskahd->fetch_assoc();
        ?>
            <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
                <tr>
                    <td rowspan="2">
                        <h3>TELEVISI RI STASIUN GORONTALO</h3>
                    </td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?= tgl_indo($drndwn['tanggal']) ?></td>
                </tr>
                <tr>
                    <td><b>TIM DESK</b></td>
                </tr>
                <tr>
                    <td rowspan="2" valign="top">
                        <h4><?= $d_naskah['judul_naskah'] ?></h4>
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
                            <?= $d_naskah['narasi'] ?>
                        </div>
                    </td>
                </tr>


            </table>
            <pagebreak>
    <?php
    }
    if ($id_naskah == '0' && $id_naskah_default == '0' && !empty($teaser)) {
       ?>
        <table border="0" style="width:100%; border-collapse:collapse;" cellpadding="2">
                
                <tr>
                    <td rowspan="2" valign="top">
                        <h4>Pokok Pokok Gorontalo Hari Ini</h4>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td>Penyiar</td>
                    <td>
                        <?= $dR['teaser'] ?>
                    </td>
                </tr>
            </table>
       <?php
    }
}
