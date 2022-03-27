<?php

$tablica[0][0] = 2;
$tablica[0][1] = 4;
$tablica[0][2] = 6;

$tablica[1][0] = 3;
$tablica[1][1] = 6;
$tablica[1][2] = 9;

$tablica[2][0] = 4;
$tablica[2][1] = 8;
$tablica[2][2] = 2;

print_r($tablica);

echo ("<br>");
echo ("<br>");


for($i = 0; $i < count($tablica); $i++) {
    $j = 0;
    echo($tablica[$i][$j]);
    echo (" ");
    $z = 1;
    echo($tablica[$i][$z]);
    echo (" ");
    $g = 2;
    echo($tablica[$i][$g]);
    echo ("<br>");
    echo ("<br>");
}
?>