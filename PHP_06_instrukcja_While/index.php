<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - pętla while</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            // 1. while(){} się wykona  malejąco
            $i = -5;
            while($i>-10){
                echo("$i ");
                $i--;
            }
            print('<br />');
            // 2. while(){} się wykona rosnąco
            $i = -5;
            while($i<=5){
                echo("$i ");
                $i++;
            }
            print('<br />');
            // 3. while(){} się NIE wykona
            $i = -5;
            while($i>=5){
                echo("$i ");
                $i++;
            }
            print('<br />');
            // 4. do{}while(); się wykona wg. pkt. 1
            $i = -5;
            do{
                echo("$i ");
                $i--;
            } while($i>-10);
            print('<br />');
            // 5. do{}while(); się wykona wg. pkt. 2
            $i = -5;
            do{
                echo("$i ");
                $i++;
            }while($i<=5);
            print('<br />');
            // 5. do{}while(); się "? NIE ?" wykona
            $i = -5;
            do{
                echo("$i ");
                $i++;
            }while($i>=5);
            print('<br />');
        ?>
    </body>
</html>
