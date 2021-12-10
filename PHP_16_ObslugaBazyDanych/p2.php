<p>Podajemy nazwę tabeli oraz trzech pól nagłówkowych tej tabeli</p>
<form action="" method="post">
    Podaj nazwę tworzonej tabeli w bazie danych     <input type="text" name="t_name" /> np.: 'tabela1'<br /><br />
    Podaj nazwę drugiej kolumny w tabeli    <input type="text" name="kol_1" /> np.: 'imie'<br /><br />
    Podaj nazwę trzeciej kolumny w tabeli    <input type="text" name="kol_2" /> np.: 'nazwisko'<br /><br />
    Podaj nazwę czwartej kolumny w tabeli    <input type="text" name="kol_3" />  np.: 'wiek'<br /><br />
    <?php
        $login="root";
        $host="localhost";
        $haslo="";
        $db_name="bazatestowa";
        @$tab=$_POST['t_name'];
        @$kol_1=$_POST['kol_1'];
        @$kol_2=$_POST['kol_2'];
        @$kol_3=$_POST['kol_3'];
        $polacz= new mysqli($host,$login,$haslo,$db_name);
        $sql_1 = "CREATE TABLE $tab (id int NOT NULL AUTO_INCREMENT, $kol_1 char(30), $kol_2 char(30), $kol_3 int(3), PRIMARY KEY(id))";
        $rezultat_1=$polacz->query($sql_1);
        $polacz->close();
    
    ?>    
    <input type="submit" value="Utwórz tabelkę" />
</form>
<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>