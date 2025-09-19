<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100){
    echo "Nilai huruf A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf : D";
}


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Jumlah lahan: $jumlahLahan <br>";
echo "Jumlah tanaman per lahan: $tanamanPerLahan <br>";
echo "Jumlah buah per tanaman: $buahPerTanaman <br><br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    echo "Lahan ke-$i menghasilkan " . ($tanamanPerLahan * $buahPerTanaman) . " buah <br>";
}

echo "<br><b>Total jumlah buah yang akan dipanen adalah: $jumlahBuah buah</b>";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "Daftar skor ujian: <br>";
foreach ($skorUjian as $index => $skor) {
    echo "Siswa " . ($index + 1) . ": $skor <br>";
    $totalSkor += $skor;
}

echo "<br>Total skor ujian adalah: $totalSkor <br>";

$rataRata = $totalSkor / count($skorUjian);
echo "Rata-rata skor ujian adalah: " . number_format($rataRata, 2);


$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "Daftar nilai siswa:<br><br>";

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai < 60) {
        echo "Siswa " . ($index + 1) . " → Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Siswa " . ($index + 1) . " → Nilai: $nilai (Lulus) <br>";
}
?>