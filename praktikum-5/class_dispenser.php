<?php
class Dispenser{
    protected static $volume = 45000;
    protected $hargaSegelas = 2000;
    private $volumeGelas = 250;
    private $jumlahPembelian = 1; // min transaction
    public $namaMinuman = "Air putih";
    private static $totalPenjualan = 0;
    protected static $nomorPembeli = 0;

    public function __construct($jumlahPembelian, $namaMinuman) // init construct
    {
        $this->namaMinuman = $namaMinuman;
        $this->jumlahPembelian = $jumlahPembelian;

        self::$volume -= ($this->volumeGelas * $jumlahPembelian);
        self::$totalPenjualan += ($this->hargaSegelas * $jumlahPembelian );
        self::$nomorPembeli += 1;
    }

    public static function isiUlang($wotah){
        if (self::$volume == 45000) {   // when default value 
            return "Gagal melakukan isi ulang: Isi wadah sudah mencapai batas maksimum";
        }
        elseif (self::$volume + $wotah > 45000) { // when value exceeds the limit
            return "Wadah saat ini terisi " . self::$volume . " ml. Harap mengurangi volume yang ingin ditambahkan.";
        }
        elseif (self::$volume + $wotah <= 45000) { // when value below or equal the limit
            return "Pengisian ulang berhasil: Wadah saat ini berisi " . number_format(self::$volume += $wotah)  . " ml." ;
        }
    }

    public function getIsi() {
        return self::$volume;
    }

    protected function infoPenjualan() {
        return self::$totalPenjualan;
    }

    public function summary() {

        return "Pembeli " . number_format(self::$nomorPembeli) . "<br>
        Pembelian volume air sebanyak: " . number_format($this->volumeGelas * $this->jumlahPembelian) . " ml. <br>
        Total penghasilan yang didapatkan: Rp. " . $this->infoPenjualan() . "<br>
        Sisa air saat ini: " . number_format($this->getIsi()) . " ml.";

    }
}
?>