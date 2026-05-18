<?php
$jumlah = 0;

for ($i = 2; $i <= 50; $i++) {
    $hasil = $jumlah + $i;
    echo "jumlah " . $jumlah . " + " . $i . " = " . $hasil . "<br>";
    $jumlah = $hasil;
}
 
echo "Jumlah bilangan 2 s/d 50: " . $jumlah;
?>
