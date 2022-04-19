<?php
require_once 'libfungsi.php';

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

$hasil_ujian = kelulusan($total);
echo $hasil_ujian;

$grade = grade($total);
echo $grade;

$predikat = predikat($total);
echo $predikat;
?>