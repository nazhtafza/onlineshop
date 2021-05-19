<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total belanja anda : Rp " . number_format($grand_total, 0, ',', '.');

                ?>

            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url('dashboard/proses_pesanan'); ?> " method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group form-control">
                    <label>Jasa Pengiriman</label>
                    <select>
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS INDONESIA</option>
                    </select>
                </div>

                <div class="form-group form-control">
                    <label>Pembayaran</label>
                    <select>
                        <option>BCA - XXXX</option>
                        <option>BNI - XXXX</option>
                        <option>BRI - XXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>

        <?php
                } else {
                    echo "<h4>Keranjang belanja anda masih kosong";
                }
        ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>