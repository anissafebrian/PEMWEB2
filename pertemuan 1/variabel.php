<?php

// variable user
$nama_depan = "icha";
$nama_belakang = 'febrian';
$umur = 17;
$tb = 160.9;

echo $nama_depan . "" . $nama_belakang;
echo "<br> Nama saya adalah $nama_depan dan saya berumur $umur tahun dan tinggi badan saya adalah $tb cm";

echo "<br / ><br />";

// variable system
echo 'Dokumen root' . $_SERVER ["DOCUMENT_ROOT"];

//  variable constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas} cm2";