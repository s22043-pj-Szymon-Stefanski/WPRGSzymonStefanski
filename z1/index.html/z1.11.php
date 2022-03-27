<?php

$alfabet = array("Q","q","W","w","E","e","R","r","T","t","Y","y","U","u","I","i","O","o","P","p",
                "A","a","S","s","D","d","F","f","G","g","H","h","J","j","K","k","L","l","Z","z",
                "X","x","C","c","V","v","B","b","N","n","M","m");

$zdanie = "The Quick brown fox jumps over the lazy dog";

$x=0;
$y=0;

$sprawdzone = array();

foreach ($alfabet as $letter) {
    if (strpos($zdanie, $letter) == true) {
        if (in_array($letter, $sprawdzone) == false) {
            array_push($sprawdzone,$letter);
            $x++;
        }
    } else {
        $y++;
    }
}

if ($x and $y == 26) {
    echo ($zdanie);
    echo ("<br>");
    echo ("jest Panagramem");
} else {
    echo ($zdanie);
    echo ("<br>");
    echo ("nie jest Panagramem");
}

?>