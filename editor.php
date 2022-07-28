<?php
error_reporting(0);
session_start();
include 'app/env.php';
include 'base_url.php';
if ($_SESSION['type_user'] != 'editor' || !isset($_SESSION['type_user'])) {

?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>';
    </script>
<?php
    return false;
}

if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'beranda_editor') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah_editor') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'buatpaket_editor') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'beranda_editor') {
    include 'views/pages/editor/beranda_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'dataBeritaNaskah_editor') {
    include 'views/pages/editor/dataBeritaNaskah_editor.php';
} else if (isset($_GET['t_editor']) && $_GET['t_editor'] == 'buatpaket_editor') {
    include 'views/pages/editor/buatpaket_editor.php';
} else {
    include 'views/pages/editor/beranda_editor.php';
}

include 'views/layout/footer.php';
