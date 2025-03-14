<?php 
require_once 'class_nilai_mahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Nurul Akbar";
$mhs1 ->matakuliah = "Pemorograman Web";
$mhs1->nilai_tugas = 90;
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "fikri junaedi";
$mhs2 ->matakuliah = "Dasar-dasar pemrograman";
$mhs2->nilai_tugas = 90;
$mhs2->nilai_uts = 60;
$mhs2->nilai_uas = 88;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Badrul Bahlil";
$mhs3 ->matakuliah = "Tugas AKhir";
$mhs3->nilai_tugas = 60;
$mhs3->nilai_uts = 50;
$mhs3->nilai_uas = 55;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];


?>
<h2 style="text-align: center;">Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing="2" cellpadding="2" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>kelulusan</th>
        </tr>
    </thead>
<tbody>
    <?php 
        $no = 1;
        foreach ($ar_mahasiswa as $obj) {
        ?>
        <tr>
             <td><?=$no ?></td>
             <td><?=$obj->nama; ?></td>
             <td><?=$obj->matakuliah; ?></td>
             <td><?=$obj->nilai_tugas; ?></td>
             <td><?=$obj->nilai_uts; ?></td>
             <td><?=$obj->nilai_uas; ?></td>
             <td><?=$obj->getNilaiAkhir(); ?></td>
             <td><?=$obj->kelulusan(); ?></td>
        </tr>
        <?php 
        $no++;
        }
        ?>
   


