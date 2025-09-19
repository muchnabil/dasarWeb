<?php
$harga = 120000;

$diskon = 20;

$syarat_diskon = 100000;

if ($harga > $syarat_diskon) {
    $harga_diskon = $harga * ($diskon / 100);
    $harga_bayar = $harga - $harga_diskon;
} else {
    $harga_bayar = $harga;
}

echo "Harga sebelum diskon: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Harga yang harus dibayar: Rp " . number_format($harga_bayar, 0, ',', '.');
?>