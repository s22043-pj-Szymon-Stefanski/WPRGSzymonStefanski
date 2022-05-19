
<?php
$page1hits = 1;
session_start();

if (isset($_COOKIE['page1hits'])){
    $page1hits = $_COOKIE['page1hits'];
    $page1hits++;
}

setcookie('page1hits',$page1hits);

if (!isset($_SESSION['page2hits'])){
    $_SESSION['page2hits'] = 0;
}
?>

<html>
<head>
    <title>Implementacja sesji</title>
</head>
<body>
<FORM method="POST" action="">
    <INPUT TYPE="TEXT" VALUE="LOGIN" name="Login" size="10">
    <br>
    <INPUT TYPE="TEXT" VALUE="HASLO" name="Haslo" size="10">
    <br>
    <INPUT TYPE=SUBMIT value="WYSLIJ" name="Submit">
</FORM>
<div>
    <?php
    if (isset($_POST['Submit'])){   header("Location: index1.php");   }
    ?>
</div>
</body>
</html>
