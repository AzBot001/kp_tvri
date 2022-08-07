<?php

function tampil_kerabat($mysqli)
{
    $nomor = 1;
    $query = $mysqli->query("SELECT * FROM kerabat_kerja");
    while ($data = $query->fetch_assoc()) {
?>

        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $data['jabatan'] ?> <?= $data['ttd'] == '1' ? '*' : '' ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nip'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <button type="button" class="btn btn-xs btn-warning text-white" data-toggle="modal" data-target="#edit<?= $data['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" type="submit" name="hapus" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="edit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Kerabat Kerja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nama Jabatan</label>
                                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                        <input type="text" name="jabatan" value="<?= $data['jabatan'] ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" name="nip" value="<?= $data['nip'] ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="ttd" value="1" <?php if($data['ttd'] == '1'){ echo "checked"; } ?> > <label for="">Tanda Tangan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="ubah" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php
    }
}

?>