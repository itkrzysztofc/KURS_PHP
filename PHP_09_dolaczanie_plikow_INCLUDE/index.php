<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - funkcje include oraz require</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            //1. dołączenie nie istniejącego pliku - include
            //2. dołączenie nie istniejącego pliku - require //Fatal Error
            //5. dołączenie istniejącego pliku - include
            //6. dołączenie istniejącego pliku - require
            //3. zapobieganie wyświetlania komunikatów - include
            //4. zapobieganie wyświetlania komunikatów - require
            //ad.1
            include ('plik1.php');
            echo("<br />Pkt.1 OK<br />");
            //ad.2
            //require ('plik1.php');
            echo("Pkt.2 OK<br />");
            //ad. 3.
            @include ('plik1.php');
            echo("Pkt.3 OK<br />");
            //ad.4
            //@require ('plik1.php');
            echo("Pkt.4 OK<br />");
            //5.
            include ('plik3.php');
            echo("Pkt.5 OK<br />");
            //6.
            require ('plik3.php');
            echo("Pkt.6 OK<br />");
        ?>

    </body>
</html>

