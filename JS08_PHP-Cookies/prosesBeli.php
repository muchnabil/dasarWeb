<?php
    if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
        // Menyimpan jumlah novel yang dibeli ke dalam cookie
        setcookie("beliNovel", $_POST["beliNovel"]);
        // Menyimpan jumlah buku teks yang dibeli ke dalam cookie
        setcookie("beliBuku", $_POST["beliBuku"]);
        // Mengalihkan pengguna ke halaman keranjangBelanja.php
        header("location: keranjangBelanja.php");
    }
?>