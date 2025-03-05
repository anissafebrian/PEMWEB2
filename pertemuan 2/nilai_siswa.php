<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<P> Nama: $nama </P>";
    echo "<P> Mata Kuliah: $matkul </P>";
    echo "<P> Nilai UTS: $nilai_uts </P>";
    echo "<P> Nilai UAS: $nilai_uas </P>";
    echo "<P> Nilai Tugas: $nilai_tugas </P>";

    //status kelulusan
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    //cek nilai total
    if  ($nilai_total > 55){
        echo "<p>$nama dinyatakan lulus. </p>";
        } else {
            echo "<p>Nilai tidak memenuhi</p>";
    }
    
 
    switch ($nilai_total) {
        case $nilai_total <= 100 && $nilai_total>= 85; 
            $grade = "A" ;
            $predikat = "sangat memuaskan" ;
            break;
        case $nilai_total <= 84 && $nilai_total >= 70 ;
            $grade = "B";
            $predikat = "memuaskan" ;
            break;
        case $nilai_total <= 69 && $nilai_total >= 56 ;
            $grade = "C";
            $predikat = "cukup" ;
            break;
        case $nilai_total <= 55 && $nilai_total >= 36 ;
            $grade = "D";
            $predikat = "kurang" ;
            break;
        case $nilai_total <= 35 && $nilai_total >= 0 ;
            $grade = "E";
            $predikat = "sangat kurang" ;
            break;
        default:
            $grade = "I";
            $predikat = "tidak ada" ;    
        }
        echo "<p> $nama mendapatkan nilai $grade dengan predikat $predikat </p>";
    }
?>