$<!DOCTYPE html>
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
                        //1. instrukcja niepełna
                        $liczba = 0;                                //var liczba;
                        if($liczba == 0){                           //if(liczba == 0){}
                            echo("Liczba ".$liczba." jest zerem."); //document.write(" ....liczba....")
                        }
                        //2. instrukcja pełna
                        $liczba = 1;
                        if($liczba == 0){
                            echo("Liczba ".$liczba." jest zerem.");
                        } else {
                            echo("Liczba ".$liczba." NIE jest zerem.");
                        }
                        //3. rozbudowana instrukcja IF
                        $liczba = -1;
                        if($liczba == 0){
                            echo("Liczba ".$liczba." jest zerem.");
                        } else if($liczba>0){
                            echo("Liczba ".$liczba." jest dodatnia.");
                        } else{
                            echo("Liczba ".$liczba." jest ujemna.");
                        }
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
