<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D {
    public $jari2;
    const PHI = 3.14;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function luasBidang(){
        $luasL = self::PHI * $this->jari2 * $this->jari2;
        return $luasL;
    }
    public function kelilingBidang(){
        $kelilingL = 2 * self::PHI * $this->jari2;
        return $kelilingL;
        var_dump($kelilingL);
    }

    public function mencetak(){
        echo '<td>'."Lingkaran".'</td>'; 
        echo '<td>'.'Jari-jari = '.$this->jari2.'</td>';
        echo '<td>'.$this->luasBidang().'</td>';
        echo '<td>'.$this->kelilingBidang().'</td>';
    }
}