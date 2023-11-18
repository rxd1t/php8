<?php

$i = 0;

# perulangan ini akan dilakukan selama nilai $i kurang dari 20.
while ($i < 101) {
    echo "Perulangan ke-{$i} <br> <b>";

    $i++;
}
echo "<hr>";

$a = 1;
while ($a <= 10) {
    echo "$a. wahdu <br>";
    $a++;
}
echo "<hr>";

//decrement
$a = 10;
while ($a >= 1) {
    echo "$a. wahdu <br>";
    $a--;
}
echo "<hr>";

//ganjil & genap dengan increment & decrement
echo "<h1>GANJIL";
echo "<br>";
$b = 1; 
do {
    echo "$b<br>";
    $b+=2;
} while ($b <= 10);
echo "<br>";

$b = 9; 
do {
    echo "$b<br>";
    $b=$b-2;
} while ($b > 0);
echo "<hr>";

echo "<h1> GENAP<BR>";
$b = 2; 
do {
    echo "$b<br>";
    $b+=2;
} while ($b <= 11);
echo "<br>";

$b = 10; 
do {
    echo "$b<br>";
    $b=$b-2;
} while ($b > 0);