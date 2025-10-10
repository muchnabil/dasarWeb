<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HTML Injection + Email Validation</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 24px; }
        input[type=text], input[type=email] { padding:6px; width:320px; margin-bottom:8px; }
        input[type=submit] { padding:6px 12px; }
        .output { margin-top:16px; padding:10px; background:#f6f6f6; border-radius:6px; }
        .ok { color: green; }
        .err { color: red; }
    </style>
</head>
<body>
    <h2>Demo: HTML Injection & Email Validation</h2>

    <h3>1) Test HTML Injection</h3>
    <form method="post" action="">
        <label>Enter text (try &lt;b&gt;bold&lt;/b&gt; or &lt;script&gt;alert('hi')&lt;/script&gt;):</label><br>
        <input type="text" name="user_input" placeholder="Masukkan teks atau kode HTML"><br>
        <input type="submit" name="submit_text" value="Submit Text">
    </form>

    <h3>2) Test Email Validation</h3>
    <form method="post" action="">
        <label>Enter email:</label><br>
        <input type="email" name="email_input" placeholder="contoh@domain.com"><br>
        <input type="submit" name="submit_email" value="Check Email">
    </form>

    <?php
    if (isset($_POST['submit_text']) && isset($_POST['user_input'])) {
        $raw = $_POST['user_input'];

        echo "<div class='output'>";
        echo "<h4>Tanpa proteksi (raw output):</h4>";
        echo $raw;
        echo "</div>";

        $safe = htmlspecialchars($raw, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo "<div class='output'>";
        echo "<h4>Dengan htmlspecialchars() (aman):</h4>";
        echo $safe;
        echo "</div>";
    }

    if (isset($_POST['submit_email']) && isset($_POST['email_input'])) {
        $email = trim($_POST['email_input']);
        echo "<div class='output'>";
        echo "<h4>Hasil Validasi Email:</h4>";
        $email_sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (filter_var($email_sanitized, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='ok'>Email <strong>" . htmlspecialchars($email_sanitized) . "</strong> adalah <strong>VALID</strong>.</p>";
        } else {
            echo "<p class='err'>Email <strong>" . htmlspecialchars($email) . "</strong> <strong>TIDAK VALID</strong>. Masukkan email yang benar (contoh: nama@domain.com).</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>