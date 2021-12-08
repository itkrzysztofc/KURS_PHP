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
                        define("stala","tekst");
                        define("stala2",8);
                        define("stala3","8");
                        echo(stala);
                        print(" ");
                        echo(stala2*2);
                        print(" ");
                        echo(stala3*2);
                        echo("<br />");
                        $zmienna = "Krzysztof";
                        $zmienna2 = "8";
                        $zmienna3 = 8;
                        echo($zmienna);
                        echo(" ");
                        echo($zmienna2*2);
                        print(" ");
                        echo($zmienna3*2);
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
