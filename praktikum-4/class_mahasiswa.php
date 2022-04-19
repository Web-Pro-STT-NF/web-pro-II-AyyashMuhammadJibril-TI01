<?php
class Mahasiswa {
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;
    
    function __construct($nim,$nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function predikat_ipk()
    {
        if ($this->ipk < 2.0) return "Cukup";
        elseif
    }
}
?>