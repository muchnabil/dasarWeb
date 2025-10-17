<?php
// Pastikan tombol submit telah ditekan
if (isset($_POST["submit"])) {
    // Tentukan direktori tujuan untuk menyimpan file yang diunggah
    $targetDirectory = "images/";
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    
    // Periksa apakah ada file yang diunggah
    if (isset($_FILES['files']['name'][0]) && !empty($_FILES['files']['name'][0])) {
        // Hitung jumlah total file yang diunggah
        $totalFiles = count($_FILES['files']['name']);
        
        // Loop melalui setiap file yang diunggah
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $targetFile = $targetDirectory . $fileName;
            
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
}
?>