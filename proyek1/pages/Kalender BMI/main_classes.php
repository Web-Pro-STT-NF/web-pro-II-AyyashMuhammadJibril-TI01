<?php

use Pasien as GlobalPasien;

class BMI {
    public $berat;
    public $tinggi;

    public function nilaiBMI() {
        $inputtb = $this->tinggi / 100;
        $hasil = $this->berat / pow($inputtb,2);
        return number_format($hasil);
    }

    public function statusBMI() {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan Bobot";
        }
        elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() < 24) {
            return "Sehat";
        }
        elseif ($this->nilaiBMI() >= 24 && $this->nilaiBMI() < 27) {
            return "Kelebihan Bobot";
        }
        elseif ($this->nilaiBMI() >= 27 && $this->nilaiBMI() < 30) {
            return "Obesitas";
        }
        elseif ($this->nilaiBMI() >= 30) {
            return "Obesitas";
        }
    }
}

trait Pasien {
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;
}

class BMIPasien extends BMI {
    use Pasien;
    public $tanggal;
    
    public function __construct($tanggal, $kode, $nama, $gender, $berat, $tinggi)
    {
        $this->tanggal = $tanggal;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function getTanggal() {
        return $this->tanggal ;
    }

    public function getKode() {
        return $this->kode;
    } 
    
    public function getNama() {
        return $this->nama;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function getTinggi() {
        return $this->tinggi;
    }
}

?>