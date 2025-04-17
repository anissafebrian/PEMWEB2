<?php
require_once "dbkoneksi.php";
include_once 'template/top.php';
include_once 'template/navbar.php';
include_once 'template/sidebar.php';

$request = $dbh->query("SELECT * FROM pasien");
$list_pasien = $request->fetchAll();
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>kode</th>
            <th>nama</th>
            <th>gender</th>
            <th>alamat</th>
            <th>Email</th>
            <th style="width: 200px">aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($list_pasien as $pasien) { ?>
        <tr>
            <td><?= $no++ ; ?></td>
            <td><?= $pasien['kode'] ?></td>
            <td><?= $pasien['nama'] ?></td>
            <td><?= $pasien['gender'] ?></td>  
            <td><?= $pasien['alamat'] ?></td>
            <td><?= $pasien['email'] ?></td>
            <td style="width: 200px">
                <a href="form_pasien.php?edit=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                <a href="proses_pasien.php?delete=<?= $pasien['id']?>" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php } ?>
    </tbody>
</table>

<?php 
include_once 'template/bottom.php';
?>