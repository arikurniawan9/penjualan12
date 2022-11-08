<div data-role="panel" data-title-caption="Daftar Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
    <div class="container">
    <table class="table table-border cell-border row-hover" data-role="table">
        <thead class="bg-info">
            <th>Nomor</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['jenis'] as $jenis) {
        ?>
            <tbody >
                <td><?= $no ?></td>
                <td><?= $jenis['jenisbarang'] ?></td>
                <td><?= $jenis['ket'] ?></td>
                <td><a href="<?= $base_url . 'jenis/edit/' . $jenis['idjenis'] ?>" class="button info"> Ubah </a>
                <a href="<?= $base_url . 'jenis/delete/' . $jenis['idjenis'] ?>" onclick="return confirm('yakin?')" class="button alert"> Hapus </a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>
    </div>
</div>