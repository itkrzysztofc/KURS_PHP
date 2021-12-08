<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - funkcje Include oraz require</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <!-- // 1. Formularz wewnątrz strony // -->
        <form action="" name="formularz1" method="post">
            <input type="text" name="tekst" />
            <input type="number" name="liczba"  />
            <input type="submit" value="Wyślij" />
        </form>
        <?php
            @$napis = $_POST['tekst'];
            @$liczba = $_POST['liczba'];
            echo("$napis<br />$liczba<br />");
        ?>
        <!-- // 2. Formularz z dodatkowym plikiem // -->
        <form action="dane.php" name="formularz1" method="post">
            <input type="text" name="tekst2" />
            <input type="number" name="liczba2"  />
            <input type="submit" value="Wyślij" />
        </form>
    </body>
</html>
