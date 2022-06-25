<?php

function tampil_kategori($mysqli)
{

    $no = 1;
    $query = $mysqli->query("SELECT * FROM kategori");
    while ($data = $query->fetch_assoc()) {

?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_kategori'] ?>">
                    <button type="button" class="btn btn-xs btn-warning text-white" data-toggle="modal" data-target="#edit_kategori<?= $data['id_kategori'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" type="submit" name="hapus_kategori" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>


        <!-- ----------------------modal_edit---------------------- -->
        <div class="modal fade" id="edit_kategori<?= $data['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit - <?= $data['nama_kategori'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="hidden" name="id" value="<?= $data['id_kategori'] ?>">
                                        <input type="text" value="<?= $data['nama_kategori'] ?>" name="nama_kategori" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit_kategori" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- ----------------------modal_edit---------------------- -->

<?php

    }
}


?>