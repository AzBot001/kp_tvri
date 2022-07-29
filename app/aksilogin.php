<?php
session_start();
include 'base_url.php';
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $pass     = $_POST['pass'];
    $level    = $_POST['level'];

    if (empty($username) || empty($pass)) {
?>
        <script>
            alert("Username / Password Kosong");
        </script>
        <?php
    } else {

        $query = $mysqli->query("SELECT * FROM user WHERE user = '$username'");

        $jmlh = mysqli_num_rows($query);

        if ($jmlh > 0) {
            $data = $query->fetch_assoc();

            if (md5($pass) == $data['pass']) {

                if ($data['status_user'] == 'Tidak Aktif') {
        ?>
                    <script>
                        alert("Akun ini telah dinonaktifkan");
                    </script>
                    <?php
                } else {
                    if ($level == $data['level']) {
                        if ($data['level'] == '0') {
                            $_SESSION['uid'] = $data['user'];
                            $_SESSION['nama'] = $data['nama_user'];
                            $_SESSION['type_user'] = "admin";
                            $_SESSION['pass'] = $data['pass'];
                            // $_SESSION['id'] = $data['id_user'];
                            ?>
                            <script>
                                document.location.href = '<?= $base_url ?>beranda_admin';
                            </script>
                            <?php
                        }else if($data['level'] == '1'){
                            $_SESSION['uid'] = $data['user'];
                            $_SESSION['nama'] = $data['nama_user'];
                            $_SESSION['type_user'] = "reporter";
                            $_SESSION['pass'] = $data['pass'];
                            $_SESSION['id'] = $data['id_user'];
                            ?>
                            <script>
                                document.location.href = '<?= $base_url ?>beranda_reporter';
                            </script>
                            <?php
                        }else if($data['level'] == '4'){
                            $_SESSION['uid'] = $data['user'];
                            $_SESSION['nama'] = $data['nama_user'];
                            $_SESSION['type_user'] = "editor";
                            $_SESSION['pass'] = $data['pass'];
                            $_SESSION['id'] = $data['id_user'];
                            ?>
                            <script>
                                document.location.href = '<?= $base_url ?>beranda_editor';
                            </script>
                            <?php
                        }else if($data['level'] == '3'){
                            $_SESSION['uid'] = $data['user'];
                            $_SESSION['nama'] = $data['nama_user'];
                            $_SESSION['type_user'] = "eic";
                            $_SESSION['pass'] = $data['pass'];
                            $_SESSION['id'] = $data['id_user'];
                            ?>
                            <script>
                                document.location.href = '<?= $base_url ?>beranda_eic';
                            </script>
                            <?php
                        }

                    } else {
                    ?>
                        <script>
                            alert("Akun ini tidak terdaftar di level user ini");
                        </script>
                <?php
                    }
                }
            } else {
                ?>
                <script>
                    alert("Password yang anda masukan salah");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Username tidak terdaftar");
            </script>
<?php
        }
    }
}
?>