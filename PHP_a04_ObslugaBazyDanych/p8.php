<p>Usunięcie tabeli z bazy danych</p>

<form action=""  method="post">
    Podaj nazwę tabeli do usunięcia np. 'tabela1' :          <input type="text" name="tabela1" min="1" /> 
    <input type="submit" value="Usuń tabelę" /><br />
</form>

<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    @$tab=$_POST['tabela1'];
    if($tab!=""){
        $polacz=mysqli_connect($host,$login,$haslo,$db_name);
        $sql8="DROP TABLE $tab";
        $zapytanie = mysqli_query($polacz,$sql8);
        mysqli_close($polacz);
        header('Location: index.php');
    }
?>        
