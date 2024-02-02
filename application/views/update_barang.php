<?php $this->load->view('header'); ?>

<!-- Form untuk update data barang -->
<form action="<?php echo site_url('databarang/update_action'); ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
    <div class="container">
        <div class="card-body">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang" value="<?php echo $barang['kode_barang']; ?>">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>">
            </div>
            <div class="form-group">
                <label>Warna</label>
                <input type="text" class="form-control" placeholder="Warna Barang" name="warna" value="<?php echo $barang['warna']; ?>">
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <select class="form-control" name="ukuran">
                    <option value="S" <?php echo ($barang['ukuran'] == 'S') ? 'selected' : ''; ?>>S</option>
                    <option value="M" <?php echo ($barang['ukuran'] == 'M') ? 'selected' : ''; ?>>M</option>
                    <option value="L" <?php echo ($barang['ukuran'] == 'L') ? 'selected' : ''; ?>>L</option>
                    <option value="XL" <?php echo ($barang['ukuran'] == 'XL') ? 'selected' : ''; ?>>XL</option>
                    <option value="XXL" <?php echo ($barang['ukuran'] == 'XXL') ? 'selected' : ''; ?>>XXL</option>
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" placeholder="Deskripsi Barang" name="deskripsi" value="<?php echo $barang['deskripsi']; ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option value="Atasan" <?php echo ($barang['kategori'] == 'Atasan') ? 'selected' : ''; ?>>Atasan</option>
                    <option value="Bawahan" <?php echo ($barang['kategori'] == 'Bawahan') ? 'selected' : ''; ?>>Bawahan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk Barang</label>
                <input type="date" class="form-control" name="tanggal_masuk" value="<?php echo $barang['tanggal_masuk']; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" min="0" value="<?php echo $barang['jumlah']; ?>">
                    <div class="input-group-append">
                        <select class="custom-select" name="satuan">
                            <option value="pcs" <?php echo ($barang['satuan'] == 'pcs') ? 'selected' : ''; ?>>pcs</option>
                            <option value="lusin" <?php echo ($barang['satuan'] == 'lusin') ? 'selected' : ''; ?>>lusin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Lokasi Rak</label>
                <select class="custom-select" name="lokasi">
                    <?php
                    // Batas maksimum jumlah lusin yang dapat dipilih
                    $max_lusin = 10;

                    // Loop untuk menghasilkan opsi rak
                    for ($i = 1; $i <= 12; $i++) {
                        // Menghitung jumlah lusin yang sudah ada di rak ini (diasumsikan ada logika penghitungan jumlah lusin)
                        $jumlah_lusin = 10; // Isi dengan logika penghitungan jumlah lusin pada rak ini

                        // Hanya menambahkan opsi rak jika jumlah lusin belum mencapai batas maksimum
                        if ($jumlah_lusin < $max_lusin * 12) {
                            $lokasi = "RK" . sprintf('%03d', $i);
                            $selected = ($barang['lokasi'] == $lokasi) ? 'selected' : '';
                            echo "<option value=\"$lokasi\" $selected>$lokasi</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" value="Update">Update</button>
            <a href="<?php echo site_url('databarang'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</form>

<?php $this->load->view('footer'); ?>
