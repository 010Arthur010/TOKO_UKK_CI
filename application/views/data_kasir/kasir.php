<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="content-wrapper">
                <h2>Data Kasir</h2>
                <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah">Tambah Kasir</button>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA KASIR</th>
                            <th>ALAMAT</th>
                            <th>TELEPON</th>
                            <th>STATUS</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>LEVEL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kasir as $k) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $k->nama ?></td>
                                <td><?= $k->alamat ?></td>
                                <td><?= $k->telepon ?></td>
                                <td><?= $k->status ?></td>
                                <td><?= $k->username ?></td>
                                <td><?= $k->password ?></td>
                                <td><?= $k->level ?></td>
                                <td>
                                   <a href="<?= base_url() . 'kasir/edit/' . $k->id_kasir ?>">
                                          <div class="btn btn-success btn-sm">Edit</div>
                                   </a>
                                   <a href="<?= base_url() . 'kasir/delete/' . $k->id_kasir ?>">
                                          <div class="btn btn-danger btn-sm">Hapus</div>
                                   </a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#distributor').DataTable();
    });
</script>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kasir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'kasir/tambah'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Kasir</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <input type="text" name="level" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

