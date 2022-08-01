<?php



function tampil_naskah_beranda($mysqli)
{
    $date = date('Y-m-d');
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM user where level != '0'");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['nama_user'] ?></td>
            <td><?= $data['user'] ?></td>
            <td>
                <?php
                if ( $data['level'] == '1'){
                    echo "Reporter";
                } else if ( $data['level'] == '4'){
                    echo "Editor";  
                } else if ( $data['level'] == '3'){
                    echo "Desk";  
                } else {
                    echo "User";  
                }   
                ?>
            </td>
            <td>
                <?php
                if ($data['status_user'] == "Aktif") {
                ?>
                    <i class="fas fa-circle text-success"></i>
                <?php
                } else {
                ?>
                    <i class="fas fa-circle text-danger"></i>
                <?php
                }
                ?>
            </td>
        </tr>
<?php
    }
}
?>