<?php

$sehirler = array("Bursa","İstanbul","Kütahya","Ankara");

for ($i=0; $i < count($sehirler); $i++) { 
    echo $sehirler[$i]. "<br/>";
}

echo "<br/>". "<br/>"; 

foreach ($sehirler as $i) {
    echo $i . "<br/>";
}

echo "<br/>". "<br/>"; 

$sayi=0;
while ($sayi <= count($sehirler)-1) {
    echo $sehirler[$sayi]. "<br/>";
    $sayi++;
}

echo "<br/>". "<br/>";

$a=0;
do {
    echo $sehirler[$a] . "<br/>";
    $a++;
} while ($a <= count($sehirler)-1);







?>