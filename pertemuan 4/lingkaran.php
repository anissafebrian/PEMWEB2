<?php
/**
 * ini adalah class lingkaran
 * berfungsi untuk objek lingkaran dengan porpeti jari-jari
 * dan method untuk menghitung luas dan keliling lingkaran
 */
class Lingkaran{
    public $jari;
    /**
     * Constructor untuk menampung jari-jari lingkaran
     */
    public const PHI = 3.14;

    public function __construct($r){
        $this->jari = $r;
    }

    /**
     * method untuk mwnghitung luas
     */

    public function getLuas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    /**
     * Method untuk mencetak lingkaran
     */
    public function getkeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }
    
/**
 * method untuk menghtiung keliling lingkaran
 */
    public function cetak(){
        echo "Lingkaran dengan jari2" . $this->jari;
        echo "<br>luas  " . $this->getLuas();
        echo "<br>Keliling " . $this->getkeliling();
    }
}
