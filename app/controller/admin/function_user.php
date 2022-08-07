<?php

function tampil_user($mysqli)
{

    $no = 1;
    $query = $mysqli->query("SELECT * FROM user WHERE level != '0'");
    while ($data = $query->fetch_assoc()) {

?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nama_user'] ?></td>
            <td><?= $data['user'] ?></td>
            <td>
                <?php
                if ($data['level'] == '1') {
                    echo 'Reporter';
                } else if ($data['level'] == '2') {
                    echo 'User';
                } else if ($data['level'] == '3') {
                    echo 'Desk';
                } else if ($data['level'] == '4') {
                    echo 'Editor';
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
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_user'] ?>">
                    <button class="btn btn-xs btn-info" type="submit" name="reset"><i class="fas fa-history"></i></button>
                    
                    <?php
                    if ($data['status_user'] == 'Tidak Aktif') {
                        ?>
                        <button class="btn btn-xs btn-success" type="submit" name="aktiff"><i class="fas fa-power-off"></i></button>
                        <?php
                    }else{
                        ?>
                        <button class="btn btn-xs text-white btn-warning" type="submit" name="aktif"><i class="fas fa-power-off"></i></button>
                        <?php
                    }
                    ?>

                    <button class="btn btn-xs btn-primary" type="button" data-toggle="modal" data-target="#edit<?= $data['id_user'] ?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-xs btn-danger" type="submit" name="hapus" onclick="return confirm('Anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <div class="modal fade" id="edit<?= $data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nama User</label>
                                        <input type="hidden" name="id" value="<?= $data['id_user'] ?>">
                                        <input type="text" name="nm_user" class="form-control" value="<?= $data['nama_user'] ?>" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control">
                                            <option hidden value="<?= $data['level'] ?>">
                                                <?php
                                                if ($data['level'] == '1') {
                                                    echo 'Reporter';
                                                } else if ($data['level'] == '2') {
                                                    echo 'User';
                                                } else if ($data['level'] == '3') {
                                                    echo 'Desk';
                                                } else if ($data['level'] == '4') {
                                                    echo 'Editor';
                                                }
                                                ?>
                                            </option>
                                            <option value="1">Reporter</option>
                                            <option value="2">User</option>
                                            <option value="3">Desk</option>
                                            <option value="4">Editor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php

    }
}

?>