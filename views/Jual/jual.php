<h1>Daftar Jual Barang</h1>

<div class="container">
    <table class="table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Tool</th>
        </thead>
        <?php $no = 1;
        foreach ($data['brgjual'] as $bj) {


        ?>
            <tbody>
                <td><?= $no; ?></td>
                <td><?= $bj['nmbarang']; ?></td>
                <td><?= 'Rp. ' . number_format($bj['harga']) ?></td>

                <?php
                if ($bj['status'] == 1) {
                    if ($bj['stok'] >= 1) {
                        $status = "Tersedia";
                    } else {
                        $status = "Habis";
                    }
                } ?>

                <td><?= $status; ?></td>
                <td><a href="<?= $base_url . 'jual/create/' . $bj['idbarang'] ?>"> Beli </a></td>
            <?php
            $no++;
        }
            ?>

            </tbody>
    </table>
</div>