<?php

function tampil_paket($mysqli)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM paket JOIN program_cu ON paket.program_paket = program_cu.id_program_cu JOIN user ON paket.pengarah_acara = user.id_user");
    while ($data = $query->fetch_assoc()) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td>
                <?php
                $program = $mysqli->query("SELECT * FROM program_cu WHERE id_program_cu = '{$data['program_paket']}'");
                $dtprogram = $program->fetch_assoc();
                echo $dtprogram['nama_program_cu']

                ?>
            </td>
            <td><?= $data['judul_paket'] ?></td>
            <td>
                <?php
                $pd = $mysqli->query("SELECT * FROM user WHERE id_user = '{$data['pengarah_acara']}'");
                $dtpd = $pd->fetch_assoc();
                echo $dtpd['nama_user']
                ?>
            </td>
            <td> <?php
                    if ($data['status'] == '0') {
                    ?>
                    <div class="badge badge-danger text-white"><i class="fas fa-clock"></i> Belum Produksi</div>
                <?php
                    } else if ($data['status'] == '1') {
                ?>
                    <div class="badge badge-warning text-white"><i class="fas fa-clock"></i> Sementara Produksi</div>
                <?php
                    } else if ($data['status'] == '2') {
                ?>
                    <div class="badge badge-warning text-white"><i class="fas fa-clock"></i> Proses Editing</div>
                <?php
                    } else {
                ?>
                    <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Tayang | <?= $data['tgl_tayang'] ?></div>
                <?php
                    }
                ?>
            </td>

        </tr>

        <div class="modal fade" id="edit<?= $data['id_paket'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit - <?= $data['judul_paket'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Paket Acara</label>
                                        <input type="hidden" name="id" value="<?= $data['id_paket'] ?>">
                                        <input type="text" name="judul_paket" class="form-control" value="<?= $data['judul_paket'] ?>" id="">
                                    </div>
                                    <div class="form-group">
                                        <label>Program Paket</label>
                                        <select name="program_paket" class="form-control">
                                            <option hidden value="<?= $data['program_paket'] ?>">
                                                <?= $data['nama_program_cu'] ?>
                                            </option>

                                            <?php

                                            $judul_cu = $mysqli->query("SELECT * FROM program_cu");
                                            while ($dataz = $judul_cu->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $dataz['id_program_cu'] ?>"><?= $dataz['nama_program_cu'] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarah Acara</label>
                                        <select name="pengarah_acara" class="form-control">
                                            <option hidden value="<?= $data['pengarah_acara'] ?>">
                                                <?= $data['nama_user'] ?>
                                            </option>

                                            <?php

                                            $userd = $mysqli->query("SELECT * FROM user WHERE level != '0'");
                                            while ($dataaa = $userd->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $dataaa['id_user'] ?>"><?= $dataaa['nama_user'] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Paket Sekarang</label>
                                        <select name="status" class="form-control">
                                            <option hidden value="<?= $data['status'] ?>">
                                                <?php
                                                if ($data['status'] == '0') {
                                                    echo 'Belum Produksi';
                                                } else if ($data['status'] == '1') {
                                                    echo 'Sementara Produksi';
                                                } else if ($data['status'] == '2') {
                                                    echo 'Proses Editing';
                                                } else if ($data['status'] == '3') {
                                                    echo 'Sudah Tayang';
                                                }
                                                ?>
                                            </option>
                                            <option value="0">Belum Produksi</option>
                                            <option value="1">Sementara Produksi</option>
                                            <option value="2">Proses Editing</option>
                                            <option value="3">Sudah Tayang</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Tanggal Tayang</label>
                                        <input name="tgl_tayang" value="<?= $data['tgl_tayang'] ?>" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Tayang" />
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
