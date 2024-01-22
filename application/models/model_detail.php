<?php

class model_detail extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function tampil_data()
  {
    $query = $this->db->get('penjualan');
    return $query->result();
  }
  public function detail($id_penjualan)
  {
    $this->db->where('id_penjualan', $id_penjualan);
    $query = $this->db->get('detail_penjualan');
    return $query->result();
  }
}
