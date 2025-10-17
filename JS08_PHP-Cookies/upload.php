<?php
// Pastikan tombol submit dengan nama "submit" sudah ditekan
if (isset($_POST["submit"])) {
    // Tentukan direktori tujuan untuk menyimpan file yang diunggah
    $targetdir = "uploads/";

    // Ambil nama asli dari file yang diunggah dan gabungkan dengan direktori tujuan
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

    // Ambil ekstensi dari file dan ubah menjadi huruf kecil
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    // Definisikan ekstensi file yang diizinkan
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    // Definisikan ukuran maksimum file (dalam byte)
    // 3 * 1024 * 1024 = 3 Megabytes
    $maxsize = 3 * 1024 * 1024;

    // Lakukan validasi: cek apakah tipe file dan ukuran file sesuai dengan aturan
    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        // Jika valid, coba pindahkan file dari lokasi sementara ke direktori tujuan
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            // Jika berhasil, tampilkan pesan sukses
            echo "File berhasil diunggah.";
        } else {
            // Jika gagal, tampilkan pesan error
            echo "Gagal mengunggah file.";
        }
    } else {
        // Jika validasi gagal, tampilkan pesan error yang sesuai
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>