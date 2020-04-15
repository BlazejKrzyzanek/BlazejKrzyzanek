<?php session_start();
if (isset($_GET['utworzCookie']) and isset($_GET['czas']) and is_numeric($_GET['czas']))
{
    setcookie("ciasteczko", "czekoladowe", time() + $_GET['czas'], "/");
    echo "Ciasteczko upieczone<br>";
    echo "<a href='index.php'>Wstecz</a>";
}
else
{
    header("Location: index.php");
}