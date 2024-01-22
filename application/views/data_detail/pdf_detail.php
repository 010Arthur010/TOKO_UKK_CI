<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      margin-top: 40px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 44px;
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <h1>PDF Report - Distributor Toko Buku</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>ID Detail</th>
        <th>ID Detail Penjualan</th>
        <th>ID Buku</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($pdf_detail as $p) :
      ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $p->id_detail ?></td>
          <td><?= $p->id_detail_penjualan ?></td>
          <td><?= $p->id_buku ?></td>
          <td><?= $p->jumlah ?></td>
          <td><?= $p->harga ?></td>
          <td><?= $p->total ?></td>
        </tr>
      <?php
      endforeach;
      ?>
    </tbody>
  </table>
</body>

</html>
