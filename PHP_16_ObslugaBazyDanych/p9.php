<p>Usunięcie bazy danych</p>

<form action=""  method="post">
    Podaj nazwę bazy danych do usunięcia np. 'bazatestowa' :         
	<input type="text" name="tabela1" min="1" /> 
    <input type="submit" value="Usuń bazę danych" /><br />
</form>

<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    @$tab=$_POST['tabela1'];
    if($tab!=""){
        $polacz=mysqli_connect($host,$login,$haslo,$db_name);
        $sql8="DROP DATABASE  $tab";
        $zapytanie = mysqli_query($polacz,$sql8);
        mysqli_close($polacz);
        header('Location: index.php');
    }
?>        
