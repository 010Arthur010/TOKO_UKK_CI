<?php

class Kasir extends CI_Controller
{
    public function __construct()
    {
        error_reporting(0);
        parent::__construct();
        $this->load->model('model_kasir');
    }
    public function index()
    {
        $data['kasir'] = $this->model_kasir->data_kasir()->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('data_kasir/kasir', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah()
    {
        $nama_kasir = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama_kasir,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'status' => $status,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $this->model_kasir->tambah($data, 'kasir');
        redirect('kasir/index');
    }
    public function edit($id)
    {
        $where = array('id_kasir' => $id);
        $data['kasir'] = $this->model_kasir->edit_kasir($where, 'kasir')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('data_kasir/edit_kasir', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_kasir');
        $nama_kasir = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama_kasir,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'status' => $status,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $where = array(
            'id_kasir' => $id
        );

        $this->model_kasir->update($where, $data, 'kasir');
        redirect('kasir/index');
    }
    public function delete($id)
    {
        $where = array('id_kasir' => $id);
        $this->model_kasir->delete($where, 'kasir');
        redirect('kasir/index');
    }
}
