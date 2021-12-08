<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - funkcje Include oraz require</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            // 1. utworzenie pliku TXT do edycji i zamknięcie go
            // 2. Wpisanie treści do pliku utworzoneg wcześniej
            // 3. odczytanie danych z pliku
            // 4. dopisanie zawartości do pliku i wyświetlenie całości
            // 5. informacje o plikach
            //ad.1.
            $nazwa = "plik.txt";
            $plik1 = fopen($nazwa,"w+");
            fclose($plik1); //zamknięcie pliku
            echo("<br />");
            // ad.2. usuwamy starą zawartość
            $plik1 = fopen($nazwa,"w");
            fputs($plik1,"Brawo!!!");
            echo("<br />");
            fclose($plik1);
            // ad.3.
            $plik1 = fopen($nazwa,"r");
            $zPliku = fread($plik1,filesize($nazwa));
            echo($zPliku ."<br />");
            fclose($plik1);
            // ad.4.
            $plik1 = fopen($nazwa,"r");
            $zPliku = fread($plik1,filesize($nazwa));
            $doPliku = "Treść dopisana na początku.\n";
            $doPliku .=$zPliku;
            fclose($plik1);
            $plik1 = fopen($nazwa,"w");
            fputs($plik1,$doPliku);
            echo($doPliku."<br />");
            fclose($plik1);
            // ad.5.
            echo(fileatime($nazwa)."<br />");//czas ostatniego odczytu
            echo(filectime($nazwa)."<br />");//czas ostatniej modyfikacji i węzła
            echo(filemtime($nazwa)."<br />");//czas ostatniej modyfikacji
            echo(fileperms($nazwa)."<br />");//prawa dostępu
            echo(filesize($nazwa)."<br />");//rozmiar pliku
        ?>

    </body>
</html>
