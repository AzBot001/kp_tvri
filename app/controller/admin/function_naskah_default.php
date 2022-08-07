<?php

function tampil_naskah_default($mysqli)
{

    $no = 1;
    $query = $mysqli->query("SELECT * FROM naskah_default");
    while ($data = $query->fetch_assoc()) {

?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['judul_naskah'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data['id_naskahdefault'] ?>">
                    <a href="<?= $base_url ?>app/controller/admin/cetak/cetak_naskahdefault.php?id=<?= $data['id_naskahdefault'] ?>" class="btn btn-success btn-xs" target="_blank">
                        <i class="fas fa-print"></i>
                    </a>
                    </button>
                    <button type="button" class="btn btn-xs btn-warning text-white" data-toggle="modal" data-target="#edit_naskah_default<?= $data['id_naskahdefault'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" type="submit" name="hapus_naskah_default" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>


        <!-- ----------------------modal_detail---------------------- -->
        <div class="modal fade" id="detail_naskah_default<?= $data['id_naskahdefault'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Narasi - <?= $data['judul_naskah'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <h4>Narasi</h4>
                                <p><?= $data['narasi'] ?></p>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- ----------------------modal_detail---------------------- -->

        <!-- ----------------------modal_edit---------------------- -->
        <div class="modal fade" id="edit_naskah_default<?= $data['id_naskahdefault'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit - <?= $data['judul_naskah'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Judul Naskah</label>
                                        <input type="hidden" name="id" value="<?= $data['id_naskahdefault'] ?>">
                                        <input type="text" value="<?= $data['judul_naskah'] ?>" name="judul_naskah" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Narasi</label>
                                        <textarea id="summernote_naskah_default_edit" name="narasi_default" cols="30" rows="10" class="form-control summernotee"><?= $data['narasi'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit_naskah_default" class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
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