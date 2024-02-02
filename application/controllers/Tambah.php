<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['action'] = site_url('Tambah/tambah_data');
        $this->load->view('tambah_barang', $data);
    }

    public function tambah_data() {
        // Ambil data dari form
        $data = array(
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'warna' => $this->input->post('warna'),
            'ukuran' => $this->input->post('ukuran'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'lokasi' => $this->input->post('lokasi')
        );

        // Panggil model untuk menyimpan data
        $this->Barang_model->tambah_barang($data);

        // Redirect ke halaman data barang
        redirect('databarang');
    }

}
?>
