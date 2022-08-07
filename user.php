<?php
error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';
if ($_SESSION['type_user'] != 'user' || !isset($_SESSION['type_user'])) {

?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>';
    </script>
<?php
    return false;
}

if (isset($_GET['t_user']) && $_GET['t_user'] == 'beranda_user') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_user']) && $_GET['t_user'] == 'dataBeritaNaskah_user') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_user']) && $_GET['t_user'] == 'buatpaket_user') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_user']) && $_GET['t_user'] == 'beranda_user') {
    include 'views/pages/user/beranda_user.php';
} else if (isset($_GET['t_user']) && $_GET['t_user'] == 'dataBeritaNaskah_user') {
    include 'views/pages/user/dataBeritaNaskah_user.php';
} else if (isset($_GET['t_user']) && $_GET['t_user'] == 'buatpaket_user') {
    include 'views/pages/user/buatpaket_user.php';
} else {
    include 'views/pages/user/beranda_user.php';
}

include 'views/layout/footer.php';
