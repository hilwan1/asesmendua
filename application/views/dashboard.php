<?php $this->load->view('header'); ?>

<?php
// Mengambil jumlah barang masuk
$sql_jumlah_barang_masuk = "SELECT COUNT(*) AS total_barang_masuk FROM gudang";
$result_jumlah_barang_masuk = $this->db->query($sql_jumlah_barang_masuk);
$data_jumlah_barang_masuk = $result_jumlah_barang_masuk->row_array();
$jumlah_barang_masuk = $data_jumlah_barang_masuk['total_barang_masuk'];

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- Widget jumlah barang masuk -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php echo $jumlah_barang_masuk; ?></h3>
            <p>Jumlah Barang Masuk</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo site_url('databarang'); ?>" class="small-box-footer">Cek Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- Card -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Aplikasi Web Tracking Barang</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        Welcome
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('footer'); ?>
