<?php echo "TABELKA W PHP" ?>
<?php
$tab = array ('2','4','1','3','5' );

echo "<table border='1''>";
echo "<tr><td>wartosc</td></tr>";
for($i=0; $i<5; $i++){
    echo "<tr><td>";
    echo $tab[$i];
    echo "</td></tr>";
}    
echo "</table>";
?>