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
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahGhi_eic') {
    $title = 'Buat Naskah GHI';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahGns_eic') {
    $title = 'Buat Naskah GNS';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahHabari_eic') {
    $title = 'Buat Naskah Habari';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahSulampa_eic') {
    $title = 'Buat Naskah Sulampa';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahDialog_eic') {
    $title = 'Buat Naskah Dialog';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaNaskah_eic') {
    $title = 'Data Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editghi') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editgns') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edithabari') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editdialog') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatpaket_eic') {
    $title = 'Verifikasi Naskah';
    $icon = 'fas fa-edit';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundown_eic') {
    $title = 'Data Rundown GHI';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundown_eic_next') {
    $title = 'Data Rundown';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundowngns_eic') {
    $title = 'Data Rundown GNS';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundownhabari_eic') {
    $title = 'Data Rundown HABARI';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'data_rundown') {
    $title = 'Data Rundown';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundownghi') {
    $title = 'Edit Rundown';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundowngns') {
    $title = 'Edit Rundown';
    $icon = 'fas fa-newspaper';
}
else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundownhabari') {
    $title = 'Edit Rundown';
    $icon = 'fas fa-newspaper';
}



include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';

if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'beranda_eic') {
    include 'views/pages/eic/beranda_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahGhi_eic') {
    include 'views/pages/eic/buatNaskahGhi_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahGns_eic') {
    include 'views/pages/eic/buatNaskahGns_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahHabari_eic') {
    include 'views/pages/eic/buatNaskahHabari_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahSulampa_eic') {
    include 'views/pages/eic/buatNaskahSulampa_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahDialog_eic') {
    include 'views/pages/eic/buatNaskahDialog_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatNaskahLc') {
    include 'views/pages/eic/buatNaskahLc_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'refghi_eic') {
    include 'views/pages/eic/refghi_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'ref_sulampa_eic') {
    include 'views/pages/eic/ref_sulampa_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'refgns_eic') {
    include 'views/pages/eic/refgns_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'ref_habari_eic') {
    include 'views/pages/eic/ref_habari_eic.php';

} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaNaskah_eic') {
    include 'views/pages/eic/dataBeritaNaskah_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editghi') {
    include 'views/pages/eic/editghi.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editgns') {
    include 'views/pages/eic/editgns.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edithabari') {
    include 'views/pages/eic/edithabari.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editsulampa') {
    include 'views/pages/eic/editsulampa.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'editdialog') {
    include 'views/pages/eic/editdialog.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundown_eic') {
    include 'views/pages/eic/data_rundown.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundown_eic_next') {
    include 'views/pages/eic/data_rundown_next.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundowngns_eic') {
    include 'views/pages/eic/data_rundown_gns.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'dataBeritaRundownhabari_eic') {
    include 'views/pages/eic/data_rundown_habari.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'data_rundown') {
    include 'views/pages/eic/rundown.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'buatpaket_eic') {
    include 'views/pages/eic/buatpaket_eic.php';
} else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundownghi') {
    include 'views/pages/eic/edit_rundownghi.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundowngns') {
    include 'views/pages/eic/edit_rundowngns.php';
}else if (isset($_GET['t_eic']) && $_GET['t_eic'] == 'edit_rundownhabari') {
    include 'views/pages/eic/edit_rundownhabari.php';
} else {
    include 'views/pages/eic/beranda_eic.php';
}



include 'views/layout/footer.php';
