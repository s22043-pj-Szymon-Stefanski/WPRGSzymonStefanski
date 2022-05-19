<?php
session_start();
if (!isset($_SESSION['page2hits'])){
    $_SESSION['page2hits'] = 1;
} else {
    $_SESSION['page2hits']++;
}

if (!isset($_COOKIE['page1hits'])){
    $_COOKIE['page1hits'] = 0;
}
?>

<html>
<head>
    <title>Implementacja sesji</title>
</head>
<body>
<div>
    <?php
    echo "Liczba wizyt na pierwszej stronie (COOKIES) ";
    echo $_COOKIE['page1hits'];
    echo "<br />";
    echo "Liczba wizyt na drugiej stronie (SESSION) ";
    echo $_SESSION['page2hits'];
    echo "<br />";
    ?>
</div>
</body>
</html>
