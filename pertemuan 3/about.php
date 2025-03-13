<?php
include './top.php';
include './menu.php';
?>        

<style>
    /* Mengatur agar <h1> berada di atas dan diberi margin bawah */
.page-title {
    color: rgb(0, 3, 2);
    text-align: center;
    margin-bottom: 20px;
}

/* Mengatur agar <p> berada di tengah halaman */
.center-text {
    text-align: center;
    margin-top: 0;
    padding: 10px;
    font-size: 16px;
}

</style>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
<?php
include './navbar.php';
?>
    <!-- Page content-->
    <div class="container-fluid" style="background: linear-gradient;">
        <!-- Judul di atas -->
        <h1 class="page-title">About my website</h1>
        
        <!-- Paragraf di tengah -->
        <p class="center-text">
            Selamat datang di website ini! Website ini dibuat sebagai bagian dari tugas kuliah di pemrograman web 2 yang diajarkan oleh Pak Sirojul Munir di STT-NURUL FIKRI. Tujuan utama pembuatan website ini adalah untuk menyelesaikan tugas kuliah.
            Melalui pengembangan dan pembuatan website ini, saya berharap dapat memperoleh pemahaman lebih dalam mengenai pemrograman web. dan mengaplikasikan teori-teori yang telah dipelajari di kelas ke dalam praktik nyata.
            Terima kasih telah mengunjungi website ini. Semoga informasi yang ada dapat memberikan gambaran mengenai topik yang sedang dibahas, serta mencerminkan hasil dari pembelajaran dan kerja keras dalam menyelesaikan tugas ini.
        </p>
    </div>
</div>

<?php
include './bottom.php';
?>
