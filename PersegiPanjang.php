<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    public function __construct($panjang,$lebar){
        $this->p = $panjang;
        $this->l = $lebar;
    }
    public function luasBidang(){
        $luasPP = $this->p * $this->l;
        return $luasPP;
    }
    public function kelilingBidang(){
        $kelilingPP = 2 * $this->p + $this->l;
        return $kelilingPP;
        
    }

    public function mencetak(){
        echo '<td>'."Persegi Panjang".'</td>'; 
        echo '<td>'."Panjang : ".$this->p. ", Lebar : ".$this->l. '</td>';
        echo '<td>'.$this->luasBidang().'</td>';
        echo '<td>'.$this->kelilingBidang().'</td>';
    }
}