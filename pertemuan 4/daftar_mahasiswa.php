<?php
require_once "class_nilaimahasiswa.php";

$mahasiswa_list = [
    new Mahasiswa("011", "Ayla Qurotun", "Sistem Informasi", 2022, 3.9),
    new Mahasiswa("012", "Ahmad Hadi", "Teknik Informatika", 2024, 2.3),
    new Mahasiswa("013", "Rizky Ridho", "Sistem Informasi", 2023, 3.5),
    new Mahasiswa("014", "Dila Cahya", "Teknik Informatika", 2021, 1.5),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa_list as $mhs): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->prodi ?></td>
                        <td><?= $mhs->thn_angkatan ?></td>
                        <td><?= $mhs->ipk ?></td>
                        <td><span class='badge bg-success'><?= $mhs->predikat_ipk() ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>