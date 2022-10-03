<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    // Buat Construct
    public function __construct($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
    }
    // Buat Method Luas Segitiga
    public function luasBIdang()
    {
        $luasSS = ($this->alas * $this->tinggi) / 2;
        return $luasSS;
    }
    // Buat Method Keliling Segitiga
    public function kelilingBidang(){
        $kelilingSS = $this->alas + $this->alas + $this->alas;
        return $kelilingSS;
    }
    // Buat Method Cetak
    public function mencetak()
    {
        echo '<td>'."Segitiga". '</td>';
        echo '<td>'."Alas : ".$this->alas. ", Tinggi : ".$this->tinggi. '</td>';
        echo '<td>'.$this->luasBidang().'</td>';
        echo '<td>'.$this->kelilingBidang().'</td>';
    }
}