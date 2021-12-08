<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - szablon HTML5</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <header>
        </header>
        <main>
            <section>
                <header>
                </header>
                <article>
                    <?php
                        $a = 4;
                        $b = 8;
                        echo($a+$b);//dodawanie
                        echo("<br />");
                        echo($a-$b);//odejmowanie
                        echo("<br />");
                        echo($a*$b);//mnożenie
                        echo("<br />");
                        echo($a/$b);//dzielenie
                        echo("<br />");
                        echo($a%$b);//reszta z dzielenia
                        echo("<br />");
                        echo($a & $b);//AND bitowy
                        echo("<br />");
                        echo($a | $b);//OR bitowy
                        echo("<br /> Negacja: ");
                        echo(~$a);//NOT
                        echo("<br />");
                        $c=7;
                        $d=1;
                        echo($c << $d);//Przesunięcie bitów w lewo o $d-pozycji
                        echo("<br />");
                        echo($c >> $d);//przesunięcie bitów w prawo
                        echo("<br />");
                    ?>
                </article>
            </section>
            <aside>
            </aside>
        </main>
        <footer>
        </footer>
    </body>
</html>
