<?php

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('level') != 'user') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda Bukan Admin!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
      redirect('auth/login');
    }
  }

  public function index()
  {
    $data['buku'] = $this->model_buku->tampil_data()->result();
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('user/dashboard', $data);
    $this->load->view('templates_/footer');
  }

  public function keranjang($id)
  {
    $buku = $this->model_buku->ambil_data($id);

    $data = array(
      'id'      => $id,
      'qty'     => 1,
      'price'   => $buku->harga_jual,
      'name'    => $buku->judul,
    );

    $this->cart->insert($data);
    redirect('user/dashboard');
  }

  public function detail_keranjang()
  {
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('user/keranjang');
    $this->load->view('templates_/footer');
  }

  public function hapus_keranjang()
  {
    $this->cart->destroy();
    redirect('dashboard/index');
  }

  public function pembayaran()
  {
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('user/pembayaran');
    $this->load->view('templates_/footer');
  }

  public function proses_pesanan()
  {
    $is_processed = $this->model_->index();
    if ($is_processed) {
      $this->cart->destroy();
      $this->load->view('templates_/header');
      $this->load->view('templates_/sidebar');
      $this->load->view('user/proses_pesanan');
      $this->load->view('templates_/footer');
    } else {
      echo "Maaf, Pesanan Anda Gagal di Proses";
    }
  }

  public function detail($id_buku)
  {
    $data['buku'] = $this->model_buku->detail_buku($id_buku);
    $this->load->view('templates_/header');
    $this->load->view('templates_/sidebar');
    $this->load->view('detail_buku', $data);
    $this->load->view('templates_/footer');
  }
}
