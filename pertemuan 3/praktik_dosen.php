<?php
function salam($nama = "Nurul fikri") {
    echo "Asalamu'alaikum Apa Kabar Teman" . $nama;
}
?>
<h1>Selamat datang di STT-NF</h1>
<p>
<?php 
    salam("Dewi Lestari");
    echo "<br>";
    salam();
?>