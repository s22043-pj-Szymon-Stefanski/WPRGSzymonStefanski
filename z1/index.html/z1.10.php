<?php

$a = 6;
$b = "*";

//gora
for ( $i=1; $i<=$a; $i++ ) {
    for( $j=0; $j<$i; $j++ ) {
        echo ($b);
    }
    echo ("<br/>");
}

for ( $i=$a; $i>0; $i-- ) {
    for( $j=$i; $j>0; $j-- ) {
        echo ($b);
    }
    echo ("<br/>");
}

//dol
for ( $i=$a; $i>0; $i-- ) {
    for( $x=$a; $x>$i; $x-- ) {
        echo ("&nbsp");
        echo ("&nbsp");
    }
    for( $j=$i; $j>0; $j-- ) {
        echo ($b);
    }
    echo ("<br/>");
}

for ( $i=1; $i<=$a; $i++ ) {
    for( $x=$a; $x>$i; $x-- ) {
        echo ("&nbsp");
        echo ("&nbsp");
    }
    for( $j=0; $j<$i; $j++ ) {
        echo ($b);
    }
    echo ("<br/>");
}

?>