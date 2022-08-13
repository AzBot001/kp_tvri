<?php
// error_reporting(0);
session_start();
include 'app/env.php';
include 'getapp.php';
include 'base_url.php';
if ($_SESSION['type_user'] != 'admin' || !isset($_SESSION['type_user'])) {

?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = '<?= $base_url; ?>';
    </script>
<?php
    return false;
}

if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    $title = 'Beranda';
    $icon = 'fas fa-dashboard';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaRundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaLead') {
    $title = 'Data Lead';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'formatTimredaksi_admin') {
    $title = 'Format tim Redaksi';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'naskahDefault_admin') {
    $title = 'Naskah Default';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'kategori_admin') {
    $title = 'kategori_admin';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'cu_admin') {
    $title = 'Current Affairs';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'sumber_admin') {
    $title = 'Sumber Berita';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'buatberita_adm') {
    $title = 'Sumber Berita';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah_admin') {
    $title = 'Sumber Berita';
    $icon = 'fas fa-edit';
}


include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    include 'views/pages/admin/beranda_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah') {
    include 'views/pages/dataBeritaNaskah.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaRundown') {
    include 'views/pages/dataBeritaRundown.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaLead') {
    include 'views/pages/dataBeritaLead.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'user') {
    include 'views/pages/admin/user.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'formatTimredaksi_admin') {
    include 'views/pages/admin/formatTimredaksi_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'naskahDefault_admin') {
    include 'views/pages/admin/naskahDefault_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'kategori_admin') {
    include 'views/pages/admin/kategori_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'cu_admin') {
    include 'views/pages/admin/cu_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'sumber_admin') {
    include 'views/pages/admin/sumber_admin.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'buatpaket_adm') {
    include 'views/pages/admin/buatpaket_adm.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'dataBeritaNaskah_admin') {
    include 'views/pages/admin/dataBeritaNaskah_admin.php';
} else {
    include 'views/pages/admin/beranda_admin.php';
}

include 'views/layout/footer.php';
