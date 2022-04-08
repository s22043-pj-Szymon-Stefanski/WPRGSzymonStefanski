
<html>
<?php
echo ("Dane osoby rezerwujacej: ");
?>

<FORM method="POST" action="">
    <INPUT TYPE="TEXT" VALUE="IMIE*" name="Imie" size="10">
    <INPUT TYPE="TEXT" VALUE="NAZWISKO*" name="Nazwisko" size="10">
    <br>
    <INPUT TYPE="TEXT" VALUE="EMAIL*" name="email" size="26">
    <br>
    <INPUT TYPE="TEXT" VALUE="NR KARTY*" name="nrkarty" size="26">
    <br>
    OD*:
    <input type="date" name="dp" value="<?php echo date('Y-m-d'); ?>"
    <br>
    <br>
    DO*:
    <input type="date" name="do" value="<?php echo date('Y-m-d'); ?>"
    <br>
    <br>
    <INPUT TYPE=CHECKBOX VALUE="lozko dzieciene" name="lozko" size="5">
    <label for="lozko">Dodatkowe lozko dzieciece</label>
    <br>
    <INPUT TYPE=CHECKBOX VALUE="klimatyzacja" name="klimatyzacja" size="5">
    <label for="klima">Klimatyzacja</label>
    <br>
    <INPUT TYPE=CHECKBOX VALUE="popielniczka" name="popielniczka" size="5">
    <label for="popielniczka">Popielniczka dla palaczy</label>
    <br>
    Liczba osob*:
    <select name="lo">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <INPUT TYPE=SUBMIT value="WYSLIJ">
</FORM>

<?php
echo ("* - pola wymagane");
$lo = $_POST['lo'];
$nm = $_POST['Imie'];
$sn = $_POST['Nazwisko'];
$od = $_POST['dp'];
$do = $_POST['do'];

$w = "";

if ($lo == "1") {
    $w = $lo;
}

if ($lo == "2") {
    $w = $lo;
}

if ($lo == "3") {
    $w = $lo;
}

if ($lo == "4") {
    $w = $lo;
}
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("PODSUMOWANIE REZERWACJI: ");
echo ("<br>");
echo ("Imie: ");
echo $nm;
echo ("<br>");
echo ("Nazwisko: ");
echo $sn;
echo ("<br>");
echo ("Od: ");
echo $od;
echo ("<br>");
echo ("Do: ");
echo $do;
echo ("<br>");
echo ("Liczba osob: ");
echo $w;

?>
</html>
