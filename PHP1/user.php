<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require_once("funkcje.php");
if (!isset($_SESSION['zalogowany']) or $_SESSION['zalogowany'] != 1) {
    header("Location: index.php");
}

echo "<h1>Witaj " . $_SESSION['zalogowanyImie'] . "!</h1>";
?>
<a href="index.php">Index</a>
<form action="index.php" method="post">
    <input type="submit" name="logout" value="Wyloguj">
</form>
<br>
<fieldset>
    <legend>Tutaj dodaje się obrazek</legend>

    <form action='dodawaniePliku.php' method='POST' enctype='multipart/form-data'>
        <input name="photoFile" type="file">
        <input type="submit" name="addFile" value="Dodaj obrazek">
    </form>

    <img src="/zdjecia/obrazek.jpg?<?=rand(1,32000)?>"
         alt="Tutaj powinien wyświetlić się obrazek jeśli tylko znajdzie się na serwerze." width="1024px">
</fieldset>
</body>
</html>
