<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model
        $this->load->model('barang_model');
    }

    public function index() {
        $data['title'] = 'Daftar Barang Masuk';
        // Ambil data barang dari model
        $data['barangs'] = $this->barang_model->getAllBarang();
        // Load view
        $this->load->view('databarang', $data);
    }

    public function hapus($id) {
        // Hapus data barang berdasarkan id
        $this->barang_model->hapus_barang($id);
        redirect('databarang');
    }

    public function update($id) {
        // Ambil data barang berdasarkan id
        $data['barang'] = $this->barang_model->get_barang_by_id($id);
        // Load view
        $this->load->view('update_barang', $data);
    }

    public function update_action() {
        // Tangkap data dari form
        $id = $this->input->post('id');
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
        // Update data barang
        $this->barang_model->update_barang($id, $data);
        redirect('databarang');
    }

}
