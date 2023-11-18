<?php
echo "<h1>Contoh Bilangan Prima<br>";
echo "<br>";

    for($i=1;$i<=50;$i++){
    $a    =0;
    for($prima=1;$prima<=$i;$prima++){
        if($i % $prima == 0){
            $a++;
        }
    }
    if($a == 2){
     echo $i.'<br> ';
    }
}
?>