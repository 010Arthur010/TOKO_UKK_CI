<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Book</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>ID Penjualan</th>
              <th>ID Buku</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Total</th>
            </tr>

            <?php
            $no = 1;
            foreach ($data_detail as $detail) :
            ?>

              <tr>
                <th><?= $no++ ?></th>
                <td><?php echo $detail->id_detail_penjualan ?></td>
                <td><?php echo $detail->id_penjualan ?></td>
                <td><?php echo $detail->id_buku ?></td>
                <td><?php echo $detail->jumlah ?></td>
                <td><?php echo $detail->harga ?></td>
                <td><?php echo $detail->total ?></td>
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