<?php

$hariIni = new DateTime("28-10-2023");
$tigaHariLagi = (clone $hariIni)->modify("+3 days");
$semingguLagi = (clone $hariIni)->modify("+1 week");
$tujuhMingguLagi = (clone $hariIni)->modify("+7 weeks");
$duaBulanLagi = (clone $hariIni)->modify("+2 months");
$limaBelasTahunLagi = (clone $hariIni)->modify("+15 years");

echo $hariIni->format("d-m-Y") . "<br>";
echo $tigaHariLagi->format("d-m-Y") . "<br>";
echo $semingguLagi->format("d-m-Y") . "<br>";
echo $tujuhMingguLagi->format("d-m-Y") . "<br>";
echo $duaBulanLagi->format("d-m-Y") . "<br>";
echo $limaBelasTahunLagi->format("d-m-Y") . "<br>";