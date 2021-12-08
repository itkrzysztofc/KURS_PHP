<p>Podajemy nazwę tworzonej bazy danych, np.: bazatestowa</p>
<form action="" method="post">
    Podaj nazwę bazy danych
    <input type="text" name="dbname" /><br />
    <?php
        /* dane do logowanaia w pustej bazie danych */
        $login="root";
        $host="localhost";
        $haslo="";
        $db_name="";
        $polacz= new mysqli($host,$login,$haslo,$db_name);
        @$nameDB=$_POST['dbname'];// '@' ukrywa pustą wartość początkową
        $sql_1 = "CREATE DATABASE $nameDB";
        $rezultat_1=$polacz->query($sql_1);
        $polacz->close();
    
    ?>
    
    <input type="submit" value="Utwórz DB" /><br />
</form>
<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>