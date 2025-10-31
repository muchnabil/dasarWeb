<?php
// Konfigurasi Database PostgreSQL
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', '123');
define('DB1', 'prakwebdb');

try {
    // Membuat koneksi PDO
    $db1 = new PDO("pgsql:host=". HOST . ";dbname=" . DB1, USER, PASS);
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Tangani kesalahan koneksi
    die("Koneksi gagal: " . $e->getMessage());
}
?>