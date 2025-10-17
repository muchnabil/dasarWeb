<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Menghapus semua variabel sesi
            session_unset(); 
            // Menghancurkan sesi
            session_destroy(); 

            echo "All session variables are now removed, and the session is destroyed.";
        ?>
    </body>
</html>