<?php

$h = 1;
echo ("Wybrano miesiac nr: ");
echo ($h);
echo (" ");

switch ($h) {
    case 1:echo ("Styczen - ma 31 dni");break;
    case 2:echo ("Luty - ma 28 dni");break;
    case 3:echo ("Marzec - ma 31 dni");break;
    case 4:echo ("Kwiecien - ma 30 dni");break;
    case 5:echo ("Maj - ma 31 dni");break;
    case 6:echo ("Czerwiec - ma 30 dni");break;
    case 7:echo ("Lipiec - ma 31 dni");break;
    case 8:echo ("Sierpien - ma 31 dni");break;
    case 9:echo ("Wrzesien - ma 30 dni");break;
    case 10:echo ("Pazdziernik - ma 31 dni");break;
    case 11:echo ("Listopad - ma 30 dni");break;
    case 12:echo ("Grudzien - ma 31 dni");break;
    default:echo ("BLAD!!! Wpisz liczbe z zakresu 1 - 12!!!");break;
}

?>