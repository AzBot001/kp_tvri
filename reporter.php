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
} else if (isset($_GET['t_reporter']) && $_GET['t_reporter'] == 'buatNaskahLc') {
    $title = 'Buat Naskah Live Cross';
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
} else {
    include 'views/pages/reporter/beranda_reporter.php';
}

include 'views/layout/footer.php';
