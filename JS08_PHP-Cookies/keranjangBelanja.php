<html>
    <head>
    </head>
    <body>
        <h2>Keranjang Belanja</h2>

        <?php
        // Mengambil nilai cookies yang telah disetel sebelumnya
            $beliNovel = $_COOKIE['beliNovel'];
            $beliBuku = $_COOKIE['beliBuku'];

            // Menampilkan jumlah yang dibeli
            echo "Jumlah Novel: " . $beliNovel . "<br>";
            echo "Jumlah Buku : " . $beliBuku;
        ?>
    </body>
</html>