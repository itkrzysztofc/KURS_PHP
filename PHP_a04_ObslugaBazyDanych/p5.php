<p>Wyświetlenie tabeli z bazy danych</p>

<form action=""  method="post">
    Podaj numer wiersza który chcesz wyświetlić <input type="number" name="lp" min="1" /> 
    <input type="submit" value="Pokaż wiersz tabeli" /><br />
</form>

<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    $tab='tabela1';
    @$id=$_POST['lp'];
    if($id != ""){
        echo "<table border='1'>";
        echo "<tr><td>l.p.</td><td>imie</td><td>nazwisko</td><td>wiek</td></tr>";
        $polacz=mysqli_connect($host,$login,$haslo,$db_name);
        $sql1="SELECT * FROM $tab WHERE `id`=$id";
        $zapytanie = mysqli_query($polacz,$sql1);
                while ($row = $zapytanie->fetch_array()){
                        echo "<tr><td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['wiek']."</td></tr>";
                }
        mysqli_close($polacz);
        echo "</table>";

    }
?>        

<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>
