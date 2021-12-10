<p>Podajemy nazwę tabeli oraz trzech pól nagłówkowych tej tabeli</p>
<form action="" method="post">
    Podaj imię <input type="text" name="kol_1" /><br /><br />
    Podaj nazwisko <input type="text" name="kol_2" /><br /><br />
    Podaj wiek osoby <input type="text" name="kol_3" /><br /><br />
    <?php
        $login="root";
        $host="localhost";
        $haslo="";
        $db_name="bazatestowa";
        @$tab='tabela1';
        @$imie=$_POST['kol_1'];
        @$nazwisko=$_POST['kol_2'];
        @$wiek=$_POST['kol_3'];
        $polacz= new mysqli($host,$login,$haslo,$db_name);
		$sql3="INSERT INTO $tab (`imie`, `nazwisko`, `wiek`) VALUES ('$imie', '$nazwisko', '$wiek')";
        if ($imie!=''){
            @$rezultat_1=$polacz->query($sql3);
        }
        $polacz->close();
    
    ?>    
    <input type="submit" value="Doadaj rekord" />
</form>
<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>