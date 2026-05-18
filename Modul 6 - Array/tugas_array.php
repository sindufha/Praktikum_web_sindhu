<?php
echo "=== Soal 1 : Pengurutan Array Assosiatif ===\n\n";

$nilai = array(
    "Sindhu" => 85,
    "Andi"   => 70,
    "Budi"   => 92,
    "Citra"  => 78,
    "Dewi"   => 65
);

echo "Array Awal:\n";
print_r($nilai);

$a = $nilai;
sort($a);
echo "\nsort():\n";
print_r($a);

$b = $nilai;
asort($b);
echo "\nasort():\n";
print_r($b);

$c = $nilai;
ksort($c);
echo "\nksort():\n";
print_r($c);

$d = $nilai;
rsort($d);
echo "\nrsort():\n";
print_r($d);

$e = $nilai;
arsort($e);
echo "\narsort():\n";
print_r($e);

$f = $nilai;
krsort($f);
echo "\nkrsort():\n";
print_r($f);


echo "\n=== Soal 2 : 5 Fungsi Array Lain ===\n\n";

echo "Array Awal:\n";
print_r($nilai);

$keys = array_keys($nilai);
echo "\narray_keys():\n";
print_r($keys);

$values = array_values($nilai);
echo "\narray_values():\n";
print_r($values);

$reverse = array_reverse($nilai);
echo "\narray_reverse():\n";
print_r($reverse);

$cari = array_search(92, $nilai);
echo "\narray_search(92, \$nilai): " . $cari . "\n";

$ada70  = in_array(70,  $nilai) ? "true" : "false";
$ada100 = in_array(100, $nilai) ? "true" : "false";
echo "\nin_array(70,  \$nilai)  => " . $ada70 . "\n";
echo "in_array(100, \$nilai)  => " . $ada100 . "\n";

$flip = array_flip($nilai);
echo "\narray_flip():\n";
print_r($flip);
?>
