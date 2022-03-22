<?php
    //Definisikan Konstanta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan jari-jari ' . $jari . ' adalah  ' . $luas;
    echo '<br>Sedangkan Kelilingnya adalah ' . $kll;
?>
<hr>
<?php
    echo 'Nama Database nya ' .DBNAME;
    echo '<br>Lokasi Database nya ada di ' .DBSERVER;
?>
