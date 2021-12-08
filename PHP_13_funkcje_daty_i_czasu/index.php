<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - funkcje Include oraz require</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            // 1. bieząca data i czas w [s] od 01.07.1970
            echo(time()."<br />");
            // 2. wyświetlenia dowolnego elementu daty i czasu
            $data = getdate();//getdate() to tablica asocjacyjna
            echo($data[0]."<br />");//aktualny znacznik czasu
            //echo($data[1]."<br />");//błąd znacznik czasu
            // 3. Wyświetlenie poszczególnych elementów tablicy
            echo($data["year"] ."<br />"); //rok np. 2021
            echo($data["month"] ." ".$data["mon"]."<br />"); //miesiąc
            echo($data["mday"] ."<br />"); //dzień miesiąca
            echo($data["weekday"] ." ".$data["wday"] ."<br />"); //dzień tygodnia
            echo($data["yday"] ."<br />"); //nr. dnia roku
            echo($data["hours"] ."<br />"); //godzina
            echo($data["minutes"] ."<br />"); //minuta
            echo($data["seconds"] ."<br />"); //sekunda
            // 4. Przykład uzycia getdate()
            echo($data["hours"].":".$data["minutes"].".".$data["seconds"] ."<br />"); //godzina
            echo ("====================<br />");
            // 5. funkcja date() zamiast getdate()
            echo (date("Y")."<br />");//rok
            echo (date("m F")."<br />");//miesiąc numer i nazwa
            echo (date("d")."<br />");//dzien
            echo (date("G")."<br />");//godzina w 24 godzinnym
            echo (date("g")."<br />");//godzina w 12 godzinnym
            echo (date("A")."<br />");//AM/PM
            echo (date("a")."<br />");//am/pm
            echo (date("i")."<br />");//minuta
            echo (date("s")."<br />");//sekunda
            echo (date("l")."<br />");//nazwa dnia tygodnia
            echo (date("c")."<br />");//pełna data
            // 6. data i godzina
            echo (date("Y-m-d G:i:s l")."<br />");//przykład
        ?>
    </body>
</html>
