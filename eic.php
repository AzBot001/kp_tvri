<?php
error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';
if ($_SESSION['type_user'] != 'eic' || !isset($_SESSION['type_user'])) {

    ?>
        <script>
            alert('Anda harus login untuk mengakses halaman ini!');
            window.location.href = '<?= $base_url; ?>';
        </script>
    <?php
        return false;
}

if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'beranda_eic') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaNaskah_eic') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editghi') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editgns') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edithabari') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editdialog') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'beranda_eic') {
    include 'views/pages/eic/beranda_eic.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaNaskah_eic') {
    include 'views/pages/eic/dataBeritaNaskah_eic.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editghi') {
    include 'views/pages/eic/editghi.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editgns') {
    include 'views/pages/eic/editgns.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edithabari') {
    include 'views/pages/eic/edithabari.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    include 'views/pages/eic/editsulampa.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editdialog') {
    include 'views/pages/eic/editdialog.php';
}else {
    include 'views/pages/eic/beranda_eic.php';
}

include 'views/layout/footer.php';
