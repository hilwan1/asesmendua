<?php $this->load->view('header'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang Masuk</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Warna</th>
                    <th>Ukuran</th>
                    <th>Deskripsi Barang</th>
                    <th>Kategori</th>
                    <th>Tanggal Masuk</th>
                    <th>Jumlah Barang</th>
                    <th>Satuan</th>
                    <th>Lokasi Rak Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (!empty($barangs)) {
                    $i = 1;
                    foreach ($barangs as $barang) {
                ?>
                <tr>
                    <td><?php echo $i; ?>.</td>
                    <td><?php echo $barang['kode_barang']; ?></td>
                    <td><?php echo $barang['nama_barang']; ?></td>
                    <td><?php echo $barang['warna']; ?></td>
                    <td><?php echo $barang['ukuran']; ?></td>
                    <td><?php echo $barang['deskripsi']; ?></td>
                    <td><?php echo $barang['kategori']; ?></td>
                    <td><?php echo $barang['tanggal_masuk']; ?></td>
                    <td><?php echo $barang['jumlah']; ?></td>
                    <td><?php echo $barang['satuan']; ?></td>
                    <td><?php echo $barang['lokasi']; ?></td>
                    <td>
                     <a href="<?php echo site_url('databarang/update/'.$barang['id']); ?>" class="btn btn-primary">Update</a>
                     <a href="<?php echo site_url('databarang/hapus/'.$barang['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
                    </td>
                </tr>
                <?php 
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='12'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<?php $this->load->view('footer'); ?>
