<div class="container-fluid">
       <h3>EDIT DATA KASIR</h3>

       <?php foreach ($kasir as $k) : ?>
              <form action="<?= base_url() . 'kasir/update' ?>" method="post">
                     <div class="for-group">
                            <label>Nama Kasir</label>
                            <input type="text" name="nama" class="form-control" value="<?= $k->nama  ?>">
                     </div>
                     <div class="for-group">
                            <label>Alamat</label>
                            <input type="hidden" name="id_kasir" class="form-control" value="<?= $k->id_kasir  ?>">
                            <input type="text" name="alamat" class="form-control" value="<?= $k->alamat  ?>">
                     </div>
                     <div class="for-group">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="<?= $k->telepon  ?>">
                     </div>
                     <div class="for-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" value="<?= $k->status  ?>">
                     </div>
                     <div class="for-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $k->username  ?>">
                     </div>
                     <div class="for-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" value="<?= $k->password  ?>">
                     </div>
                     <div class="for-group">
                            <label>Level</label>
                            <input type="text" name="level" class="form-control" value="<?= $k->level  ?>">
                     </div>
                     <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
              </form>
       <?php endforeach; ?>
</div>