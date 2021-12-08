<p>Wyświetlenie tabeli z bazy danych</p>

<form action=""  method="post">
    Podaj numer wiersza z którego chcesz wyświetlić zawartość kolumny
        <input type="number" name="lp" min="1" /> 
    Podaj nazwę kolumny (id, imie, nazwisko, wiek)
	<select name="columna">
		<option>imie</option>
		<option>nazwisko</option>
		<option>wiek</option>
	</select>
        <!-- <input type="option" name="columna" /> -->
    <input type="submit" value="Pokaż zawartość pola tabeli" /><br />
</form>

<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    $tab='tabela1';
    @$id=$_POST['lp'];
    @$kol=$_POST['columna'];
    if($id != ""){
        echo "<table border='1'>";
        $polacz=mysqli_connect($host,$login,$haslo,$db_name);
        $sql1="SELECT $kol FROM $tab WHERE `id`=$id";
        $zapytanie = mysqli_query($polacz,$sql1);
                while ($row = $zapytanie->fetch_array()){
                        echo "<tr><td>".$row[$kol]."</td></tr>";
                }
        mysqli_close($polacz);
        echo "</table>";

    }
?>        

<form action="index.php" method="post">
    <input type="submit" value="Powrót na stronę główną" /><br />
</form>
