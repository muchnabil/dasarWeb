<?php

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Haykal","Halo");

echo "<hr>";

$saya = "Nabil";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>