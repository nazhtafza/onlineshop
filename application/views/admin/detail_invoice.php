<div class="container-fluid">

    // output yang terbaca cuma satu

    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice:</div>
    </h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Barang</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub total</th>
        </tr>

        <?php
        $total = 0;
        $subtotal = $pesanan->jumlah * $pesanan->harga;
        $total += $subtotal;
        ?>

        <tr>
            <td><?php echo $pesanan->id_barang ?></td>
            <td><?php echo $pesanan->nama_barang ?></td>
            <td><?php echo $pesanan->jumlah ?></td>
            <td><?php echo number_format($pesanan->harga, 0, ',', '.') ?></td>
            <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp <?php echo number_format($total, 0, ',', '.') ?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>
</div>