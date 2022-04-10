
<FORM method="POST" action="">
        <INPUT TYPE="NUMBER" name="liczbaP" size="10">
        <INPUT TYPE="NUMBER" name="liczbaD" size="10">
        <br>
        <select name="dzialania">
            <option value="dodawanie">dodawanie</option>
            <option value="odejmowanie">odejmowanie</option>
            <option value="dzielenie">dzielenie</option>
            <option value="mnozenie">mnozenie</option>
        </select>
        <br>
        <INPUT TYPE=SUBMIT>
        <OUTPUT TYPE=NUMBER>
</FORM>

<?php
$lP = $_POST['liczbaP'];
$lD = $_POST['liczbaD'];
$dzialania = $_POST['dzialania'];
$w = "";

if ($dzialania == "dodawanie") {
    $w = $lP + $lD;
}

if ($dzialania == "odejmowanie") {
    $w = $lP - $lD;
}

if ($dzialania == "dzielenie") {
    $w = $lP / $lD;
}

if ($dzialania == "mnozenie") {
    $w = $lP * $lD;
}
echo ("<br>");
$plik = fopen('wynikiKalkulator.txt','a');
$g = "\n";

fwrite($plik, $w);
fwrite($plik, $g);
echo $w;

?>
