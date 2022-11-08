<!-- vjual  required -->

<?php

if ($aksi == 'index') {
    $data['brgjual'] = $db->query($connect, "SELECT * FROM vbarang");
    $helpers->load_view('Jual/jual', $data);
}
if ($aksi == 'create') {
    $idbarang = $uri[4];
    $data['barang'] = $db->query($connect, "SELECT * FROM tbarang WHERE idbarang='$idbarang'");
    $data['kdjual'] = $db->query($connect, "SELECT max(right(idjual,4)) AS kodejual FROM tjual");
    $helpers->load_view('Jual/addjual', $data);
}

?>