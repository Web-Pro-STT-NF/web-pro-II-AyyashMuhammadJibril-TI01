<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$total = $nilai_uts * 30/100 + $nilai_uas * 35/100 + $nilai_tugas * 35/100;

if(!empty($proses)) {
    echo 'Proses : ' .$proses;
    echo '<br>Nama Siswa : ' .$nama_siswa;
    echo '<br>Mata Kuliah : ' .$mata_kuliah;
    echo '<br>Nilai UTS : ' .$nilai_uts;
    echo '<br>Nilai UAS : ' .$nilai_uas;
    echo '<br>Nilai Tugas/Praktikum : ' .$nilai_tugas;
    echo '<br>Total Nilai : ' .$total;
}

if($total > 55) {
    echo '<br>Status Kelulusan : ' . '<a style="color:green; font-weight:bold;">Lulus</a>';
}
else {echo '<br>Status Kelulusan : ' . '<a style="color:red; font-weight:bold;">Tidak Lulus</a>';}

if($total >= 0 && $total < 36) {
    $grade = 'E';
    echo '<br>Grade Nilai : ' . '<a style="color:red; font-weight:bold;">E</a>';
}
elseif($total >= 36 && $total < 56) {
    $grade = 'D';
    echo '<br>Grade Nilai : ' . '<a style="color:orange; font-weight:bold;">D</a>';
}
elseif($total >= 56 && $total < 70) {
    $grade = 'C';
    echo '<br>Grade Nilai : ' . '<a style="color:orange; font-weight:bold;">C</a>';
}
elseif($total >= 70 && $total < 85) {
    $grade = 'B';
    echo '<br>Grade Nilai : ' . '<a style="color:green; font-weight:bold;">B</a>';
}
elseif($total >= 85 && $total <= 100) {
    $grade = 'A';
    echo '<br>Grade Nilai : ' . '<a style="color:green; font-weight:bold;">A</a>';
}
else {
    $grade = 'I';
    echo '<br>Grade Nilai : ' . '<a style="color:grey; font-weight:bold;">I</a>';
}

switch(true) {
    case ($grade == 'E');
        echo '<br>Predikat: Sangat Kurang';
        break;
    case ($grade == 'D');
        echo '<br>Predikat: Kurang';
        break;
    case ($grade == 'C');
        echo '<br>Predikat: Cukup';
        break;
    case ($grade == 'B');
        echo '<br>Predikat: Memuaskan';
        break;
    case ($grade == 'A');
        echo '<br>Predikat: Sangat Memuaskan';
        break;
    default:
        echo '<br>Tidak Ada';
}
?>