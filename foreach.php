<?php

$siswa = ["ahmad", "budi", "indah", "abdul"];

//asort($siswa); -> untuk mengurutkan sesuai abjad

foreach ($siswa as $no => $s) {
    echo ++$no . ". $s<br>";
}