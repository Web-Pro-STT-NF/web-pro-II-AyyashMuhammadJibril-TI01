<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matkul, $nilai, $nim) {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    public function dataMahasiswa()
    {
        echo 'NIM : ' . $this->nim;
        echo '<br>Mata Kuliah : ' . $this->matkul;
        echo '<br>Nilai Ujian : '. $this->nilai;
    }
    function grade() {
        if ($this->nilai >= 0 && $this->nilai < 36) return "E";
        elseif ($this->nilai >= 36 && $this->nilai < 56) return "D";
        elseif ($this->nilai >= 56 && $this->nilai < 70) return "C";
        elseif ($this->nilai >= 70 && $this->nilai < 85) return "B";
        elseif ($this->nilai >= 85 && $this->nilai <= 100) return "A";
        else return "Invalid";
    }
    function hasil() {
        if ($this->nilai >= 0 && $this->nilai <= 55) return '<a style="color:red; font-weight:bold;">TIDAK LULUS</a>';
        elseif ($this->nilai >= 56 && $this->nilai <= 100) return '<a style="color:green; font-weight:bold;">LULUS</a>';
        else return '<a style="color:grey; font-weight:bold;">INVALID</a>';
    }
}
