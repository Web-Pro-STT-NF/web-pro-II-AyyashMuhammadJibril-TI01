<?php
require_once 'class_dispenser.php';

$pembeli1 = new Dispenser(4);
echo $pembeli1-> summary();
echo "<br>";
echo "<br>";
$pembeli2 = new Dispenser(7);
echo $pembeli2-> summary();
echo "<br>";
echo "<br>";
$pembeli3 = new Dispenser(3);
echo $pembeli3-> summary();
echo "<br>";
echo "<br>";
echo Dispenser::isiUlang(30000);
echo "<br>";
echo "<br>";
echo Dispenser::isiUlang(3000);
echo "<br>";
echo "<br>";
echo Dispenser::isiUlang(500);
echo "<br>";
echo "<br>";
echo Dispenser::isiUlang(1);
?>
