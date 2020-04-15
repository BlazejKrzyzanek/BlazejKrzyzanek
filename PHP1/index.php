<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
if (isset($_POST["logout"])) {
    $_SESSION['zalogowanyImie'] = null;
    $_SESSION['zalogowany'] = 0;
}
echo "<h1>Nasz system</h1>";

//    echo "<p>Przesłany login: " . $login . "<br>";
//    echo "Przesłane hasło: " . $password . "</p>";
?>

<form action="logowanie.php" method="post">
    <fieldset>
        <legend>Dane logowania</legend>
        <label class="form_row">
            Login:
            <input type="text" name="login">
        </label><br>
        <label class="form_row">
            Hasło:
            <input type="password" name="password">
        </label><br>
        <input type="submit" name="signin" value="Zaloguj">
    </fieldset>
</form>

<fieldset>
    <legend>Informacje o ciasteczkach</legend>
    <form action="cookie.php" method="get">
        <label>
            Czas życia ciasteczka:
            <input type="number" name="czas" value="czas">
        </label>
        <input type="submit" name="utworzCookie" value="Utwórz cookie">
    </form>

    <h2> Ciasteczko</h2>
    <?php
    if (isset($_COOKIE['ciasteczko'])) {
        echo "<p>Istnieje ciasteczko " . $_COOKIE['ciasteczko'] . "</p>";
    } else {
        echo "<p>Ciasteczka nie ma</p>";
    }
    ?>
</fieldset>

<a href="user.php">User</a>
</body>
</html>