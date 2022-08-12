<?php
include 'app/controller/eic/function_naskah.php';
include 'app/flash_message.php';

if (isset($_POST['hapus_ghi'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    $delete =  $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_ghi","Data Naskah GHI berhasil dihapus");
}
if (isset($_POST['hapus_gns'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    $delete =  $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_gns","Data Naskah GNS berhasil dihapus");
}
if (isset($_POST['hapus_habari'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    $delete =  $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_habari","Data Naskah Habari berhasil dihapus");
}
if (isset($_POST['hapus_sulampa'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    $delete =  $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_sulampa","Data Naskah Sulampa berhasil dihapus");
}
if (isset($_POST['hapus_dialog'])) {
    $id = $_POST['id'];
    $query = $mysqli->query("DELETE FROM naskah WHERE id_naskah = '$id'");
    $delete =  $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$id'");
    flash("msg_hapus_dialog","Data Naskah Dialog berhasil dihapus");
}

if (isset($_POST['simpan_kerabat'])) {
    $id = $_POST['id'];
    $kerabat = $_POST['kerabat'];
    $jabatan1 = $_POST['jabatan1'];
    $jabatan2 = $_POST['jabatan2'];
    $jabatan3 = $_POST['jabatan3'];
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nip1 = $_POST['nip1'];
    $nip2 = $_POST['nip2'];
    $nip3 = $_POST['nip3'];
    $mysqli->query("INSERT INTO kerabat_rundown VALUES ('','$id','$kerabat','$jabatan1','$jabatan2','$jabatan3','$nama1','$nama2','$nama3','$nip1','$nip2','$nip3')");
    ?>
<script>
        document.location.href = '<?= $base_url ?>data_rundown';
    </script>
    <?php
}

if (isset($_POST['verifikasighi'])) {
    if($_POST['kategori'] == 0 ){
        ?>
            <script>
                alert("Lengkapi Isian ! Silahkan Input Kembali");
            </script>
        <?php
    }
    else {
        $judul = $_POST['judul'];
        $lokasi = $_POST['lokasi'];
        $kameramen = $_POST['kameramen'];
        $tgl_berita = $_POST['tgl_berita'];
        $kategori = $_POST['kategori'];
        $bobot = $_POST['bobot'];
        $lead = $_POST['lead'];
        $narasi = $_POST['narasi'];
        $su = $_POST['su'];
        $u = $_POST['u'];
        $narasi_soundup = $_POST['narasi_soundup'];
        $jenis = 'ghi';

        $id = $_POST['id_user'];
        $jumlah_su = count($su) - 1;
        $idx = $_POST['idx'];

        $update = $mysqli->query("UPDATE naskah SET judul = '$judul', lokasi = '$lokasi', kameramen = '$kameramen', tgl_berita = '$tgl_berita', id_kategori = '$kategori', bobot = '$bobot', lead = '$lead', naskah = '$narasi', sts_periksa = '1' WHERE id_naskah = '$idx'");
        $delete = $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$idx'");

        for ($i = 0; $i < $jumlah_su; $i++) {

            $query_detail = $mysqli->query("INSERT INTO detail_naskah VALUES ('','$idx','$u[$i]','$su[$i]','$narasi_soundup[$i]')");
        }
    }
?>
    <script>
        document.location.href = '<?= $base_url ?>dataBeritaNaskah_eic';
    </script>
<?php


}


if (isset($_POST['verifikasigns'])) {
    if($_POST['kategori'] == 0 ){
        ?>
            <script>
                alert("Lengkapi Isian ! Silahkan Input Kembali");
            </script>
        <?php
    }
    else {
        $judul = $_POST['judul'];
        $lokasi = $_POST['lokasi'];
        $kameramen = $_POST['kameramen'];
        $tgl_berita = $_POST['tgl_berita'];
        $kategori = $_POST['kategori'];
        $bobot = $_POST['bobot'];
        $lead = $_POST['lead'];
        $narasi = $_POST['narasi'];
        $su = $_POST['su'];
        $u = $_POST['u'];
        $narasi_soundup = $_POST['narasi_soundup'];
        $jenis = 'gns';

        $id = $_POST['id_user'];
        // print_r($narasi_soundup);
        $jumlah_su = count($su) - 1;
        $idx = $_POST['idx'];
        $update = $mysqli->query("UPDATE naskah SET judul = '$judul', lokasi = '$lokasi', kameramen = '$kameramen', tgl_berita = '$tgl_berita', id_kategori = '$kategori', bobot = '$bobot', lead = '$lead', naskah = '$narasi', sts_periksa = '1' WHERE id_naskah = '$idx'");
        $delete = $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$idx'");

        for ($i = 0; $i < $jumlah_su; $i++) {

            $query_detail = $mysqli->query("INSERT INTO detail_naskah VALUES ('','$idx','$u[$i]','$su[$i]','$narasi_soundup[$i]')");
        }
        ?>
        <script>
            document.location.href = '<?= $base_url ?>dataBeritaNaskah_eic';
        </script>
        <?php
    }
}

if (isset($_POST['verifikasihabari'])) {
    if($_POST['kategori'] == 0 ){
        ?>
            <script>
                alert("Lengkapi Isian ! Silahkan Input Kembali");
            </script>
        <?php
    }
    else {
        $judul = $_POST['judul'];
        $lokasi = $_POST['lokasi'];
        $kameramen = $_POST['kameramen'];
        $tgl_berita = $_POST['tgl_berita'];
        $kategori = $_POST['kategori'];
        $bobot = $_POST['bobot'];
        $lead = $_POST['lead'];
        $narasi = $_POST['narasi'];
        $su = $_POST['su'];
        $u = $_POST['u'];
        $narasi_soundup = $_POST['narasi_soundup'];
        $jenis = 'habari';
        $sts_periksa = $_POST['sts_periksa'];
        $stss_edit = $_POST['sts_edit'];
        $id = $_POST['id_user'];
        // print_r($narasi_soundup);
        $jumlah_su = count($su) - 1;
        $idx = $_POST['idx'];
        $update = $mysqli->query("UPDATE naskah SET judul = '$judul', lokasi = '$lokasi', kameramen = '$kameramen', tgl_berita = '$tgl_berita', id_kategori = '$kategori', bobot = '$bobot', lead = '$lead', naskah = '$narasi', sts_periksa = '1' WHERE id_naskah = '$idx'");
        $delete = $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$idx'");

        for ($i = 0; $i < $jumlah_su; $i++) {

            $query_detail = $mysqli->query("INSERT INTO detail_naskah VALUES ('','$idx','$u[$i]','$su[$i]','$narasi_soundup[$i]')");
        }
        ?>
        <script>
            document.location.href = '<?= $base_url ?>dataBeritaNaskah_eic';
        </script>
        <?php
    }
}

if (isset($_POST['verifikasisulampa'])) {

    $judul = $_POST['judul'];
    $lokasi = $_POST['lokasi'];
    $kameramen = $_POST['kameramen'];
    $tgl_berita = $_POST['tgl_berita'];
    $kategori = $_POST['kategori'];
    $bobot = $_POST['bobot'];
    $lead = $_POST['lead'];
    $narasi = $_POST['narasi'];
    $su = $_POST['su'];
    $u = $_POST['u'];
    $narasi_soundup = $_POST['narasi_soundup'];
    $jenis = 'sulampa';
    $sts_periksa = $_POST['sts_periksa'];
    $stss_edit = $_POST['sts_edit'];
    $id = $_POST['id_user'];
    // print_r($narasi_soundup);
    $jumlah_su = count($su) - 1;
    $idx = $_POST['id'];
    $update = $mysqli->query("UPDATE naskah SET judul = '$judul', lokasi = '$lokasi', kameramen = '$kameramen', tgl_berita = '$tgl_berita', id_kategori = '$kategori', bobot = '$bobot', lead = '$lead', naskah = '$narasi', sts_periksa = '1' WHERE id_naskah = '$idx'");
    $delete = $mysqli->query("DELETE FROM detail_naskah WHERE id_naskah = '$idx'");

    for ($i = 0; $i < $jumlah_su; $i++) {

        $query_detail = $mysqli->query("INSERT INTO detail_naskah VALUES ('','$idx','$u[$i]','$su[$i]','$narasi_soundup[$i]')");
    }
    ?>
     <script>
        document.location.href = '<?= $base_url ?>dataBeritaNaskah_eic';
    </script>
    <?php


}

if (isset($_POST['verifikasidialog'])) {

    if($_POST['kategori'] == 0 ){
        ?>
            <script>
                alert("Lengkapi Isian ! Silahkan Input Kembali");
            </script>
        <?php
    }
    else {
        $judul = $_POST['judul'];
        $tgl_berita = $_POST['tgl_berita'];
        $kategori = $_POST['kategori'];
        $lead = $_POST['lead']; 
        $narsum = $_POST['narasumber'];
        $ket_narsum = $_POST['ket_narsum'];
        $nohp_narsum = $_POST['nomorhp_narsum'];
        $idx = $_POST['id'];
        $query = "UPDATE naskah SET judul = '$judul', tgl_berita = '$tgl_berita', id_kategori = '$kategori', narasumber = '$narsum', nomorhp_narsum = '$nohp_narsum', ket_narsum = '$ket_narsum', sts_periksa = '1' WHERE id_naskah = '$idx'";
        $update = $mysqli->query($query);
        ?>
        <script>
            document.location.href = '<?= $base_url ?>dataBeritaNaskah_eic';
        </script>
<?php
    }
}

?>
