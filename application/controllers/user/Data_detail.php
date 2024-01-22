<?php

class Data_detail extends CI_Controller
{
  public  function __construct()
  {
    parent::__construct();
    $this->load->model('model_detail');
  }
  public function index()
  {
    $data['detail'] = $this->model_detail->tampil_data();
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('data_detail/data_detail', $data);
    $this->load->view('templates_/footer');
  }
  public function detail($id_penjualan)
  {
    $data['data_detail'] = $this->model_detail->detail($id_penjualan);
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('data_detail/detail_penjualan', $data);
    $this->load->view('templates_/footer');
  }
}
