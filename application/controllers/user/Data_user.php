<?php

class Data_user extends CI_Controller
{
  public  function __construct()
  {
    parent::__construct();
    $this->load->model(array('model_admin'));
  }

  public function index()
  {
    $data['user'] = $this->model_user->tampil_data();
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('admin/data_admin', $data);
    $this->load->view('templates_/footer');
  }

  public function detail($id_penjualan)
  {
    $data['penjualan'] = $this->model_admin->ambil_data_penjualan($id_penjualan);
    $data['detail'] = $this->model_admin->ambil_data_detail($id_penjualan);
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('admin/detail_transaksi', $data);
    $this->load->view('templates_/footer');
  }
}
