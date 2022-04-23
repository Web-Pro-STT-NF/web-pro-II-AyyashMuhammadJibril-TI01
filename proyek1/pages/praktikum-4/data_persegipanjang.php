<?php
require_once "class_persegipanjang.php";
$persegip1 = new persegiPanjang(10, 5);
$persegip2 = new persegiPanjang(4, 7);

echo "Luas Persegi Panjang I " . $persegip1->getLuas();
echo "<br>Luas Persegi Panjang II " . $persegip2->getLuas();

echo "<br>Keliling Persegi Panjang I " . $persegip1->getKeliling();
echo "<br>Keliling Persegi Panjang II " . $persegip2->getKeliling();
?>