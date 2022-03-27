<?php

$a=6;
$b=8;
$c=5;

if ($a > $b and $a > $c) {
    echo ($a);
    echo ("<br>");
    if ($b > $c) {
        echo ($b);
        echo ("<br>");
        echo ($c);
    } else {
        echo ($c);
        echo ("<br>");
        echo ($b);
    }
} elseif ($b > $a and $b > $c) {
    echo ($b);
    echo ("<br>");
    if ($a > $c) {
        echo ($a);
        echo ("<br>");
        echo ($c);
    } else {
        echo ($c);
        echo ("<br>");
        echo ($a);
    }
} else {
    echo ($c);
    echo ("<br>");
    if ($a > $b) {
        echo ($a);
        echo ("<br>");
        echo ($b);
    } else {
        echo ($b);
        echo ("<br>");
        echo ($a);
    }
}

echo ("<br>");
echo ("<br>");

if ($a < $b and $a < $c) {
    echo ($a);
    echo ("<br>");
    if ($b < $c) {
        echo ($b);
        echo ("<br>");
        echo ($c);
    } else {
        echo ($c);
        echo ("<br>");
        echo ($b);
    }
} elseif ($b < $a and $b < $c) {
    echo ($b);
    echo ("<br>");
    if ($a < $c) {
        echo ($a);
        echo ("<br>");
        echo ($c);
    } else {
        echo ($c);
        echo ("<br>");
        echo ($a);
    }
} else {
    echo ($c);
    echo ("<br>");
    if ($a < $b) {
        echo ($a);
        echo ("<br>");
        echo ($b);
    } else {
        echo ($b);
        echo ("<br>");
        echo ($a);
    }
}

?>