<html>
    <head>
        <title>Halaman Home</title>
    </head>
    <body>
    <?php
        session_start();
        if ($_SESSION['status'] == 'login') {
        // Tampilkan pesan selamat datang dan tautan Logout jika sudah login
            echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?php
        } 
        else {
        // Tampilkan pesan dan tautan Login jika belum login
            echo "Anda belum login, silahkan";
    ?>
            <a href="sessionLoginForm.html">Login</a>
    <?php
            }
        ?>
    </body>
</html>