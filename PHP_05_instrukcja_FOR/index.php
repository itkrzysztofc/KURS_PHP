<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - pętla FOR</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            // 1. iterator w pętli rosnącej
            for ($i=0; $i<10; $i++){
                echo($i." ");
            }
            print('<br />');
            // 2. iterator w pętli malejącej
            for ($i=10; $i>0; $i--){
                echo($i." ");
            }
            print('<br />');
            // 3. odmienna konstrukcja pętli FOR
            $i=0;
            for(;$i<10;){
                echo("$i ");
                $i++;
            }
            print('<br />');
            // 4. wynik działania FOR w pionie
            for ($i=10; $i>0; $i--){
                echo("$i<br />");
            }
            print('<br />');
        ?>
    </body>
</html>
