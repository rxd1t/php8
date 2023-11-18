<?php

setlocale(LC_ALL, 'id_ID');

// atau

setlocale(LC_ALL, 'id_ID.utf8'); // tergantung dengan lokalisasi yang terpasang pada sistem

'<br>';

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime("28-10-2023");

# lokalisasi berpengaruh
echo strftime('%A %d %B %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';
echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';