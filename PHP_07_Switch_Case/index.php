<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>PHP - pętla while</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <?php
            $liczba = 0;
            switch($liczba){
                case 1:
                    echo ("Wybrałeś 1");
                    break;
                case 2:
                    echo("Wybrałeś 2");
                    break;
                default:
                    echo("Zły wybór");
                    break;
            }
            print '<br />';
            // dla tekstu - inna konstrukcja
            $tekst = 'HP';
            switch($tekst)
            {
                case 'HP';
                case 'MacBook';
                case 'Lenovo';
                    echo ('dobry wybór');
                break;
                default;
                    echo 'Proszę dokonać włąściwego wyboru...';
                break;
            }
        ?>
    </body>
</html>
