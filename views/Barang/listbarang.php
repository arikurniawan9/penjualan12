<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<div class="container">

    <table class="table table-bordered table-responsive">
        <h1 class="text-center">Daftar Barang</h1>
        <thead class="bg-danger">
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Pengirim</th>
            <th colspan=2>Tools</th>
        </thead>
        <?php
        $no = 1;
        foreach ($data['barang'] as $barang) {
        ?>
            <tbody>
                <td><?= $no++ ?></td>
                <td><?= $barang['nmbarang'] ?></td>
                <td><?= $barang['jenisbarang'] ?></td>
                <td><?= $barang['stok'] ?></td>
                <td><?= $barang['harga'] ?></td>
                <td><?= $barang['nmdist'] ?></td>
                <td><a href="<?= $base_url . 'barang/edit/' . $barang['idbarang'] ?>"> Ubah</a></td>
                <td><a href="<?= $base_url . 'barang/delete/' . $barang['idbarang'] ?>">Hapus</a></td>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>

</div>
<!-- nmbarang 	idjenis 	stok 	harga 	iddist 	status 	 -->