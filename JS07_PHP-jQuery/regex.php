<?php
$pattern = '/[a-z]/'; 
$text = 'This is a Sample Text.'; 
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else { 
    echo "Tidak ada huruf kecil!";  
}

echo "<h3>Mencari dan Mengambil Digit</h3>";
$pattern = '/[0-9]+/'; 
$text = 'There are 123 apples.'; 
if (preg_match($pattern, $text, $matches)) {
    echo "Output: Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Output: Tidak ada yang cocok!<br>";
}

$pattern = '/apple/'; 
$replacement = 'banana'; 
$text = 'I like apple pie.'; 
$new_text = preg_replace($pattern, $replacement, $text);
echo "Teks Baru : " . $new_text . "<br>";

echo "<h3>Mencocokkan 'g' diikuti 'o' nol/lebih, dan 'd'</h3>";
$pattern = '/go*d/'; 
$text = 'god is good.'; 
if (preg_match($pattern, $text, $matches)) {
    echo "Output: Cocokkan: " . $matches[0] . "<br>";
    var_dump($matches);
} else {
    echo "Output: Tidak ada yang cocok!<br>";
}

echo "<h3>Mencocokkan 'g' diikuti 'o' nol/satu kali, dan 'd'</h3>";
$pattern = '/go?d/'; 
$text = 'god is good.'; 
if (preg_match($pattern, $text, $matches)) {
    echo "Output: Cocokkan: " . $matches[0] . "<br>"; 
} else {
    echo "Output: Tidak ada yang cocok!<br>";
}

echo "<h3>Mencocokkan 'g' diikuti 'o' minimal 2x, maksimal 3x, dan 'd'</h3>";
$pattern = '/go{2,3}d/'; 
$text = 'god good goood gooood.'; 
if (preg_match($pattern, $text, $matches)) {
    echo "Output: Cocokkan: " . $matches[0] . "<br>"; 
} else { 
    echo "Output: Tidak ada yang cocok!<br>";
}
?>