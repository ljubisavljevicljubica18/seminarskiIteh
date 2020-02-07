<?php

if (!isset ($_GET["idIzmena"])){
echo "Parametar id nije prosleđen!";
} else {
$id=$_GET["idIzmena"];
include "konekcijaProizvodi.php";

$sql="SELECT * FROM proizvodi WHERE id='".$id."'";
$rezultat = $mysqli->query($sql);
if ($rezultat->num_rows!=0){
echo "0";
} else {
echo "1";
}
$mysqli->close();
}



?>
