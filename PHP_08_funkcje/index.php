<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - funkcje</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
        /* Plan
            // 1. ogólna postać funkcji
            // 2. wywołanie funkcji
            // 3. funkcja bez parametru ze zmienną lokalną
            // 4. zmienna globalna
            // 5. parametry przekazywane do funkcji
            // 6. funkcja zwracająca waretość (nie popsiada polecenia echo/print)
            // 7. Przykład funkcji zwracającej wartość warunkowo
            // 8. funkcja przekazująca parametr do funkcji
        */
            // 1. ogólna postać funkcji
            function funkcja(){
                echo('To jest ogólna postać funkcji bez parametru. <br />');
            }
            // 2. wywołanie funkcji
            funkcja();
            // 2.funkcja z parametrem
            function pokazParametr($parametr){
                echo("To jest nasz parametr: $parametr <br />");
            }
            pokazParametr("My name is Kris.");
            // 3. funkcja bez parametru ze zmienną lokalną
            function zmiennaLocalna(){
                $zm = 8;
                echo("$zm <br />");
            }
            zmiennaLocalna();
            // 4. zmienna globalna
            $globalna = 4;
            function zmiennaGlobalna(){
                $globalna+=$globalna;
                echo("$globalna <br />");
            }
            zmiennaLocalna();
            // 5. parametry przekazywane do funkcji
            function paramDoFunkcji($a,$b){
                $c=$a+$b;
                echo("$c <br />");
            }
            paramDoFunkcji(4,6);
            // 6. funkcja zwracająca waretość (nie popsiada polecenia echo/print)
            function kwadrat($bok){
                return $bok*$bok;
            }
            echo(kwadrat(4)."<br />");
            // 7. Przykład funkcji zwracającej wartość warunkowo
            function czyPrawda($x,$y){
                if($x!=$y){
                    return "Zmienne są rózne<br />";
                }
            }
            echo(czyPrawda(4,5));
            // 8. funkcja przekazująca parametr do funkcji
            function szescian($a){
                return pow($a,3);
            }
            function wynikSzescianu($bok){
                return szescian($bok);
            }
            echo(wynikSzescianu(4)."<br  />");
        ?>

    </body>
</html>
