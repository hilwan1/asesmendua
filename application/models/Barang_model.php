<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function tambah_barang($data) {
        // Simpan data ke dalam database
        $this->db->insert('gudang', $data);
    }

    public function getAllBarang() {
        // Ambil semua data barang dari database
        return $this->db->get('gudang')->result_array();
    }

    public function hapus_barang($id) {
        // Hapus data barang berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('gudang');
    }

    public function get_barang_by_id($id) {
        // Ambil data barang berdasarkan id
        $this->db->where('id', $id);
        return $this->db->get('gudang')->row_array();
    }

    public function update_barang($id, $data) {
        // Update data barang berdasarkan id
        $this->db->where('id', $id);
        $this->db->update('gudang', $data);
    }

}

