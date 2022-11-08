<?php

foreach ($data['kdjual'] as $kdjual) {
    if ($kdjual > 0) {
        $no = ((int)$kdjual['kodejual'] + 1);
        $kd = sprintf("%04s", $no);
    } else {
        $kd = 0001;
    }

    date_default_timezone_set('asia/jakarta');
    $kdjual = date('dmy') . $kd;
}

?>


<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<div class="container col-md-5  align-content-end">

    <script type="text/javascript">
        function startCalc() {
            interval = setInterval("calc()", 1);
        }

        function calc() {
            harga = document.jual.harga.value;
            qty = document.jual.jmlbarang.value;
            bayar = document.jual.bayar.value;
            total = document.jual.totalharga;
            kembali = document.jual.kembali;
            total.value = (harga * 1) * (qty * 1);
            kembali.value = (bayar * 1) - (total.value * 1);
        }

        function stopCalc() {
            clearInterval(interval);
        }
    </script>
    <h1 class="text-center">Data Jual</h1>
    <form action="" method="post" name="jual">
        <div>
            <label for="" class="form-label">Kode Jual</label>
            <input class="form-control mb-1" type="text" name="idjual" id="" value="<?= $kdjual ?>" readonly>
        </div>
        <div>
            <label for="" class="form-label">Tanggal Transaksi</label>
            <input class="form-control mb-1" type="date" name="tgljual" id="" value="">
        </div>
        <?php
        foreach ($data['barang'] as $brg) {

        ?>
            <div>
                <label for="" class="form-label">Nama Barang</label>
                <input class="form-control mb-1" type="text" name="idbarang" id="" value="<?= $brg['nmbarang'] ?>" placeholder="" readonly>
            </div>
            <div>
                <label for="" class="form-label">Harga Barang</label>
                <input class="form-control mb-1" type="text" name="harga" id="" value="<?= $brg['harga'] ?>" placeholder=" " readonly>
            </div>
        <?php } ?>
        <div>
            <label for="" class=" form-label">Qty</label>
            <input class="form-control mb-1" type="number" name="jmlbarang" id="" value="" onfocus="startCalc()" onblur="stopCalc()" placeholder="">
        </div>
        <div>
            <label for="" class="form-label">Total Harga</label>
            <input class="form-control mb-1" type="number" name="totalharga" id="" value="" onfocus="startCalc()" onblur="stopCalc()" placeholder="Rp.xxxxxxx" readonly>
        </div>
        <div>
            <label for="" class="form-label">Bayar</label>
            <input class="form-control mb-1" type="number" name="bayar" id="" value="" onfocus="startCalc()" onblur="stopCalc()" placeholder="Rp.xxxxxxx" required>
        </div>
        <div>
            <label for="" class="form-label">Kembalian</label>
            <input class="form-control mb-3" type="number" name="kembali" id="" value="" onfocus="startCalc()" onblur="stopCalc()" placeholder="Rp.xxxxxxx" readonly>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn bg-success text-light me-2" type="submit">Bayar</button>
            <button class="btn bg-danger text-light" type="reset">Batal</button>
        </div>
    </form>
</div>