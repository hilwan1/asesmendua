<?php $this->load->view('header'); ?>

<style>
    /* CSS untuk tampilan responsif dan modern */
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .card-body {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #495057;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: none;
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .input-group-append {
        margin-left: 10px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .card-footer {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<form action="<?php echo $action; ?>" method="post">
    <div class="container">
        <div class="card-body">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label>Warna</label>
                <input type="text" class="form-control" placeholder="Warna Barang" name="warna">
            </div>
            <div class="form-group">
                <label for="kategori">Ukuran</label>
                <select class="form-control" name="ukuran" id="ukuran">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" placeholder="Deskripsi Barang" name="deskripsi">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" name="kategori" id="kategori">
                    <option value="Atasan">Atasan</option>
                    <option value="Bawahan">Bawahan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk Barang</label>
                <input type="date" class="form-control" name="tanggal_masuk">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" min="0">
                    <div class="input-group-append">
                        <select class="custom-select" name="satuan">
                            <option value="pcs">pcs</option>
                            <option value="lusin">lusin</option>
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
                            echo "<option value=\"$lokasi\">$lokasi</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" value="Simpan">Submit</button>
            <a href="<?php echo site_url('databarang'); ?>" class="btn btn-primary">Lihat Daftar Barang Masuk</a>
        </div>
    </div>
</form>

<?php $this->load->view('footer'); ?>
