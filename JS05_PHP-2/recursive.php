<?php
function tampilankanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    if($indeks < $jumlah){
        tampilankanAngka($jumlah, $indeks + 1);
    }
}

tampilankanAngka(20);
?>