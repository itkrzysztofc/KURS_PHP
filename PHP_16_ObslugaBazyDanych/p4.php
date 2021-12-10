<p>Wyświetlenie tabeli z bazy danych</p>
<table border="1">
<tr><td>l.p.</td><td>imie</td><td>nazwisko</td><td>wiek</td></tr>
<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    $tab='tabela1';
    $polacz=mysqli_connect($host,$login,$haslo,$db_name);
    $sql1="SELECT * FROM $tab WHERE 1";
    $zapytanie = mysqli_query($polacz,$sql1);
    while ($row = $zapytanie->fetch_array()){
            echo "<tr><td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['wiek']."</td></tr>";
    }
    mysqli_close($polacz);
?>  
</table>
<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>
