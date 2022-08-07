<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TVRI Gorontalo - Pemberitaan</title>
    <!-- Tell the browser to be responsive to screen width -->

    <link rel="stylesheet" href="<?= $base_url ?>public/assets/dist/css/calendar/app.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SummerNote CSS -->
    <link href="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .sidebar-head {
            background-color: #FBB62B;
        }

        .ungu {
            background-color: #c337fa;
        }

        .overlay-dark {
            background-color: rgba(black, 0.4);
        }



        .navbar-blue {
            background-color: #1584A2;
        }


        .bg-login {
            background-image: url('public/dist/img/bg1.png');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-bottom: 0px;
        }

        .profile-user-img {
            border: 3px solid #adb5bd;
            margin: 0 auto;
            padding: 3px;
            width: 205px;
        }

        .pagination>li.active>a,
        .pagination>li.active>span {
            background-color: #F9B42B !important;
            border-color: #F9B42B !important;
        }

        .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #F9B42B;
            color: #fff;
        }

        .nav-item .nav-link  {
            color: #fff;
        }

        .nav-item:hover .nav-link:hover {
            color:  #fff !important;
        }
        
        .t-bl {
            color: #437fc7;
        }

        .t-bl:hover  {
            color:  #437fc7 !important;
        }

        .bg-dshbra {
            background-color: #69a1e5;
            color: #ffffff;
        }

        .bg-biru {
            background-color: #437FC7;
            color: #fff;
        }

        .bg-kuning {
            background-color: #F9B42B;
            color: #fff;
        }

        .bg-coklat {
            background-color: #B9732F;
            color: #fff;
        }

        .bg-hijau {
            background-color: #30AA4C;
            color: #fff;
        }

        .card-info:not(.card-outline)>.card-header {
            background-color: #6daffe;
        }

    </style>
</head>
<?php
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

    // variabel pecahkan 0 = tahun
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tanggal

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>