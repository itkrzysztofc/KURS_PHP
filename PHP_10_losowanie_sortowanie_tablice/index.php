<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            // 1. losowanie liczby
            // 2. losowanie liczby z zakresu
            // 3. deklarowanie tablicy z danymi
            // 4. przypisanie elementu do tablicy
            // 5. losowanie tablicy o 10 elementach, sortowanie, wyświetlanie
            // 6. długość tablicy i stringów
            //ad.1
            echo (rand()."<br />");
            //ad.2
            echo(rand(5,55)."<br />");
            //ad.3
            $tab1 = array ("To"," ","są",8);
            echo($tab1[0].$tab1[1].$tab1[2].$tab1[3]."<br />");
            //ad.4
            $tab1[1] = "-";
            echo("$tab1[1] <br />");
            //ad.5
            for($i=0;$i<10;$i++){
                $tab2[$i] = rand(1,100);
                echo($tab2[$i]." ");
            }
            echo ("<br />");
            sort($tab2);//sortowanie
            for($i=0;$i<10;$i++){
                echo($tab2[$i]." ");
            }
            echo ("<br />");
            rsort($tab2);//sortowanie rewersyjne
            for($i=0;$i<10;$i++){
                echo($tab2[$i]." ");
            }
            //ad.6
            $napis = "To jest napis o długości 27";
            echo($napis[0]."<br />");
             echo(count($tab2)."<br />");// tylko do array - liczby
            echo(strlen($napis));
            echo("<br />");        
			?>

    </body>
</html>
