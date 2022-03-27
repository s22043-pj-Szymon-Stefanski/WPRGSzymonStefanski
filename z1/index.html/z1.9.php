<?php

$pierwsza[] = 1;
$pierwsza[] = 3;
$pierwsza[] = 5;

$druga[] = 2;
$druga[] = 4;
$druga[] = 6;

for ($i = 0; $i < 3; $i++) {
    if ($pierwsza[$i] == true and $druga[$i] == true) {
        $trzecia[$i] = $pierwsza[$i] * $druga[$i];
    } else {
        echo ("BLAD!!! Jedna z tablic jest mniejsza od drugiej!!!");
    }
}

echo (array_sum($trzecia));

?>