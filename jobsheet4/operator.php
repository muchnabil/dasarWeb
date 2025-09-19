<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil Penjumlahan (a + b) = $hasilTambah <br>";
echo "Hasil Pengurangan (a - b) = $hasilKurang <br>";
echo "Hasil Perkalian (a * b)   = $hasilKali <br>";
echo "Hasil Pembagian (a / b)   = $hasilBagi <br>";
echo "Sisa Bagi (a % b)         = $sisaBagi <br>";
echo "Hasil Pangkat (a ** b)    = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Apakah a == b ? " . var_export($hasilSama, true) . "<br>";
echo "Apakah a != b ? " . var_export($hasilTidakSama, true) . "<br>";
echo "Apakah a < b  ? " . var_export($hasilLebihKecil, true) . "<br>";
echo "Apakah a > b  ? " . var_export($hasilLebihBesar, true) . "<br>";
echo "Apakah a <= b ? " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Apakah a >= b ? " . var_export($hasilLebihBesarSama, true) . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil (a && b) = " . var_export($hasilAnd, true) . "<br>";
echo "Hasil (a || b) = " . var_export($hasilOr, true) . "<br>";
echo "Hasil (!a)     = " . var_export($hasilNotA, true) . "<br>";
echo "Hasil (!b)     = " . var_export($hasilNotB, true) . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Nilai awal a = 10 <br>";
echo "Nilai b = 5 <br><br>";

$a1 = 10;
$a1 += $b;
echo "Hasil a += b → $a1 <br>";

$a2 = 10;
$a2 -= $b;
echo "Hasil a -= b → $a2 <br>";

$a3 = 10;
$a3 *= $b;
echo "Hasil a *= b → $a3 <br>";

$a4 = 10;
$a4 /= $b;
echo "Hasil a /= b → $a4 <br>";

$a5 = 10;
$a5 %= $b;
echo "Hasil a %= b → $a5 <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a = $a (tipe: " . gettype($a) . ")<br>";
echo "Nilai b = $b (tipe: " . gettype($b) . ")<br><br>";

echo "Apakah a === b ? " . var_export($hasilIdentik, true) . "<br>";
echo "Apakah a !== b ? " . var_export($hasilTidakIdentik, true) . "<br>";
?>