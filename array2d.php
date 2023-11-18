<?php
echo "<h3>Array 2 Dimensi</h3>";
$nama = [
    ["Joko", "Jurnalistik", "Laki-laki", 16],
    ["Siti", "Tata Boga", "Perempuan", 15],
];
var_dump($nama);
echo "<br>";
echo $nama[1][1];

echo "<h2>Array 2 Dimensi - Array Assosiatif</h2>";
$nilai = [
    "Jessica" => [
        "Matematika" => 80,
        "Ppkn" => 75,
        "Fisika" => 85,
    ],
    "Fairuz" => [
        "Matematika" => 85,
        "Ppkn" => 80,
        "Fisika" => 85,
    ],
    "Jorel" => [
        "Matematika" => 95,
        "Ppkn" => 70,
        "Fisika" => 80,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["Fairuz"]["Ppkn"];
echo "<br>";
echo '<pre>' . var_export($nilai, true) . '<pre>';