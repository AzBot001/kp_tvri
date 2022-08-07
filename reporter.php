<?php
error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';
if ($_SESSION['type_user'] != 'reporter' || !isset($_SESSION['type_user'])) {

?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>';
    </script>
<?php
    return false;
}

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatpaket_rep') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'beranda_reporter') {
    include 'views/pages/reporter/beranda_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGhi') {
    include 'views/pages/reporter/buatNaskahGhi_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahGns') {
    include 'views/pages/reporter/buatNaskahGns_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahHabari') {
    include 'views/pages/reporter/buatNaskahHabari_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahSulampa') {
    include 'views/pages/reporter/buatNaskahSulampa_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahDialog') {
    include 'views/pages/reporter/buatNaskahDialog_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc') {
    include 'views/pages/reporter/buatNaskahLc_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaNaskah_reporter') {
    include 'views/pages/reporter/dataBeritaNaskah_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaRundown_reporter') {
    include 'views/pages/reporter/dataBeritaRundown_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'dataBeritaLead_reporter') {
    include 'views/pages/reporter/dataBeritaLead_reporter.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'refghi') {
    include 'views/pages/reporter/refghi.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'ref_sulampa') {
    include 'views/pages/reporter/ref_sulampa.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'refgns') {
    include 'views/pages/reporter/refgns.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'ref_habari') {
    include 'views/pages/reporter/ref_habari.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'editghi') {
    include 'views/pages/reporter/editghi.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'editgns') {
    include 'views/pages/reporter/editgns.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'edithabari') {
    include 'views/pages/reporter/edithabari.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'editsulampa') {
    include 'views/pages/reporter/editsulampa.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'editdialog') {
    include 'views/pages/reporter/editdialog.php';
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatpaket_rep') {
    include 'views/pages/reporter/buatpaket_rep.php';
} else {
    include 'views/pages/reporter/beranda_reporter.php';
}

include 'views/layout/footer.php';
