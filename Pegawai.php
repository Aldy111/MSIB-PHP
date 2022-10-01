<?php
//buat class  pegawai
class Pegawai{
     //buat variabel
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        //variabel static dan constant
        static $jml = 0;
        const PT = 'PT. Nurul Fikri Cipta Inovasi';

    //buat funtion constract

    public function __construct($nip,$nama,$jabatan,$agama,$status){
        //lalu lakukan this agar dapat di gunakan oleh function/kondisi yang lain
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this-> status = $status;
        self::$jml++;
    }

    public function setGapok(){
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }
    public function setTunjab(){
        $tunjangan_jabatan = 0.2 * $this->setGapok();
        return $tunjangan_jabatan;
    }
    public function setTunkel(){
        $tunjangan_keluarga = ($this->status == 'Menikah') ? 0.1 * $this->setGapok():0;
        return $tunjangan_keluarga;
    }
    public function setGator(){
        $bruto = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $bruto;
    }
    public function setZakat(){
        $zakat = ($this->agama == 'Islam' && $this->setGator() >= 6000000)? 0.025 * $this->setGator():0;
        return $zakat;
    }
    public function mencetak(){
        echo '<td>'.self::PT.'</td>'; 
        echo '<td>'.$this->nip.'</td>';
        echo '<td>'.$this->nama.'</td>';
        // echo '<br/>Jabatan: Rp. '.number_format($this->saldo, 0, ',', '.');
        echo '<td>'.$this->jabatan.'</td>';
        echo '<td>'.$this->agama.'</td>';
        echo '<td>'.$this->status.'</td>';
        echo '<td>Rp.'.number_format($this->setGapok(), 0,',','.').'</td>';
        echo '<td>Rp.'.number_format($this->setTunjab(), 0,',','.').'</td>';
        echo '<td>Rp.'.number_format($this->setTunkel(), 0,',','.').'</td>';
        echo '<td>Rp.'.number_format($this->setZakat(), 0,',','.').'</td>';
    }

}
