<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action=""> 
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>

    <div id="ajax-result" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc;">
        Hasil Pemrosesan AJAX akan muncul di sini.
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); 
                
                // Variabel untuk menyimpan nilai
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); // Ambil nilai password
                var validClient = true;

                // === Validasi Nama dan Email (sebelumnya) ===
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi (Client).");
                    validClient = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi (Client).");
                    validClient = false;
                } else {
                    $("#email-error").text("");
                }
                
                // === PENAMBAHAN VALIDASI PASSWORD (SISI KLIEN) ===
                if (password === "") {
                    $("#password-error").text("Password harus diisi (Client).");
                    validClient = false;
                } else if (password.length < 8) {
                    // Validasi Panjang Minimum 8 Karakter
                    $("#password-error").text("Password minimal 8 karakter (Client).");
                    validClient = false;
                } 
                else {
                    $("#password-error").text("");
                }
                // ===============================================
                
                if (validClient) {
                    // Reset pesan error sisi klien dan lakukan AJAX
                    $("#nama-error").text("");
                    $("#email-error").text("");
                    $("#password-error").text(""); // Reset error password

                    $.ajax({
                        type: "POST",
                        url: "",
                        data: $("#myForm").serialize(),
                        success: function(response) {
                            $("#ajax-result").html(response);
                        },
                        error: function(xhr, status, error) {
                            $("#ajax-result").html("Terjadi kesalahan AJAX: " + status);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Ambil nilai password
    $errors = array();

    // Validasi Nama dan Email (sebelumnya)
    if (empty($nama)) {
        $errors[] = "Nama harus diisi (Server).";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi (Server).";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid (Server).";
    }

    // === PENAMBAHAN VALIDASI PASSWORD (SISI SERVER) ===
    if (empty($password)) {
        $errors[] = "Password harus diisi (Server).";
    } elseif (strlen($password) < 8) {
        // Validasi Panjang Minimum 8 Karakter
        $errors[] = "Password minimal 8 karakter (Server).";
    }
    // =================================================

    if (!empty($errors)) {
        $output = '<div style="color: red;">';
        foreach ($errors as $error) {
            $output .= $error . "<br>";
        }
        $output .= '</div>';
        echo $output;
    } else {
        echo '<div style="color: green;">Data berhasil dikirim: Nama = ' . htmlspecialchars($nama) . ', Email = ' . htmlspecialchars($email) . ', Password panjang: ' . strlen($password) . ' karakter.</div>';
    }
    exit;
}
?>