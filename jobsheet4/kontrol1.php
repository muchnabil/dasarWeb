<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTengah = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

$totalNilai = array_sum($nilaiTengah);
$rataRata = $totalNilai / count($nilaiTengah);

echo "Daftar nilai awal: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Nilai yang digunakan (tanpa 2 tertinggi & 2 terendah): " . implode(", ", $nilaiTengah) . "<br><br>";
echo "Total nilai setelah penghapusan: $totalNilai <br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2);
?>