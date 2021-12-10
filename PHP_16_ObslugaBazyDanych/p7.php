<p>Usunięcie rokordu tabeli z bazy danych</p>

<form action=""  method="post">
    Podaj numer wiersza do usunięcia          <input type="number" name="lp" min="1" /> 
    <input type="submit" value="Usuń wiesz" /><br />
</form>

<?php
    $login="root";
    $host="localhost";
    $haslo="";
    $db_name="bazatestowa";
    $tab='tabela1';
    @$id=$_POST['lp'];
    if($id!=""){
        $polacz=mysqli_connect($host,$login,$haslo,$db_name);
        $sql7="DELETE FROM $tab WHERE id=$id";
        $zapytanie = mysqli_query($polacz,$sql7);
        mysqli_close($polacz);
        header('Location: index.php');
    }
?>        
