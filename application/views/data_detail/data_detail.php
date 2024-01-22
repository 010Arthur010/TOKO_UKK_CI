<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Book</h6>
    </div>
    <div class="card-body">
    <a href="<?= base_url('data_detail/pdf') ?>" class="btn btn-sm btn-success mb-3"><i class="fas fa-download"> PDF</i></a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Penjualan</th>
              <th>ID Kasir</th>
              <th>Harga</th>
              <th>Tanggal</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($detail as $d) : 
            ?>
              <tr>
                <th><?= $no++ ?></th>
                <th><?= $d->id_penjualan ?></th>
                <th><?= $d->id_kasir ?></th>
                <th><?= $d->total ?></th>
                <th><?= $d->tanggal ?></th>
                <td>
                  <?= anchor('data_detail/detail/' . $d->id_penjualan, '<div class="btn btn-warning btn-sm"><i class="fa fa-list"></i></div>') ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->