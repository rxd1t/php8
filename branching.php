<?php
# if 1 variable
$hari = "cerah";
if ($hari == "hujan") {
    echo "saya bawa jas hujan";
}

echo "<hr>";

## if 2 variable 
$hari = "hujan";
if ($hari == "hujan") {
    echo "saya bawa payung";
}
echo "<hr>";

$nilai = 89;
if ($nilai >= 75 AND $nilai <=100) {
    echo "Nilai anda $nilai, anda <b>lulus</b>";
 } elseif ($nilai >=0 AND $nilai < 75) {
        echo "Nilai anda $nilai, anda <b>tidak lulus</b>";
 } else {
        echo "Nilai anda $nilai, tidak ada ketentuan nilai seperti ini";
 }
 echo "<hr>";

 if ($nilai >= 91 AND $nilai <= 100):
    echo " Jika nilai anda $nilai, nilai anda A";
elseif ($nilai >=83 AND $nilai < 91) :
    echo "Jika nilai anda $nilai, nilai anda B";
elseif ($nilai >=75 AND $nilai < 83) :
    echo "Jika nilai anda $nilai, nilai anda C";
elseif ($nilai >=0 AND $nilai < 75) :   
    echo "Jika nilai anda $nilai, nilai anda D";
else :
    echo "nilai anda $nilai, tidak ada penilaian seperti ini";
endif;
echo "<hr>";

$hasil = "A";
if ($hasil == "A"):
    echo "istimewa";
elseif ($hasil == "B"):
    echo "baik";
elseif ($hasil == "C"):
    echo "kurang";
elseif ($hasil == "D"):
    echo "perbaiki";
else :
    echo "tidak ada ketentuan seperti ini";
endif;