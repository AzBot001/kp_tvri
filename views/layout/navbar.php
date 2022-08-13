<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand  navbar-light" style="background-color: #437FC7;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <div class="text-white nav-link" role="button">SIMPAN TVRI GORONTALO</div>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link text-white">
                        <?php
                        $date = date('Y-m-d');
                        echo tgl_indo($date)

                        ?>
                    </a>
                </li>
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-white" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i> <?= $nama_user ?>
                    </a>
                    <div class="dropdown-menu">
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-cog"></i> Pengaturan Akun
                        </button>
                        <a href="<?= $base_url ?>app/logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-cog"></i> Pengaturan Akun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profil</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Password</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <br>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Nama Pengguna</label>
                                        <input type="hidden" name="id" value="<?= $id_us ?>">
                                        <input type="text" class="form-control" name="nama" value="<?= $nama_user ?>" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Usernamae</label>
                                        <input type="text" class="form-control" name="username" value="<?= $username_user ?>" id="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="profil" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <br>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Password Lama</label>
                                        <input type="hidden" name="id" value="<?= $id_us ?>">
                                        <input type="password" class="form-control" name="lama" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password Baru</label>
                                        <input type="password" class="form-control" name="baru" id="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="password" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        if (isset($_POST['profil'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $user = $_POST['username'];

            $mysqli->query("UPDATE user SET nama_user = '$nama', user = '$user' WHERE id_user = '$id'");
        ?>
            <script>
                alert('Berhasil Mengganti Profil');
            </script>
        <?php
        }

        ?>
        <?php

        if (isset($_POST['password'])) {
            $id = $_POST['id'];
            $lama = md5($_POST['lama']);
            $baru = md5($_POST['baru']);

            if ($lama == $password_user) {
                $mysqli->query("UPDATE user SET pass = '$baru' WHERE id_user = '$id'");
        ?>
                <script>
                    alert('Berhasil Mengganti Password');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Konfirmasi Ulang Kata Sandi');
                </script>
        <?php
            }
        }

        ?>