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
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('data_detail/data_detail', $data);
    $this->load->view('templates_admin/footer');
  }
  public function detail($id_penjualan)
  {
    $data['data_detail'] = $this->model_detail->detail($id_penjualan);
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('data_detail/detail_penjualan', $data);
    $this->load->view('templates_admin/footer');
  }
  public function pdf()
  {
    $data['kasir'] = $this->model_user->tampil_data('kasir');
    $data['penjualan'] = $this->model_penjualan->tampil_data('penjualan');
    $this->load->view('data_penjualan/pdf_penjualan', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();

    $pdf = new Dompdf();

    $pdf->setPaper($paper_size, $orientation);
    $pdf->loadHtml($html);
    $pdf->render();
    $pdf->stream("laporan_Penjualan.pdf", [
      'Attachment' => 0
    ]);
  }
}
