<?php

include("database.php");
include("skolaSminkanja.php");

$crud = new Database("makeupstudiobojanvukadinov");

$skole = array();

if (!isset ($_GET["id"])){
    echo "Parametar ID nije prosleđen!";
    } else {
    $pomocna=$_GET["id"];
    
    $crud->select("*", "skoleSminkanja", "mesto=$pomocna");
    while($red=$crud->getResult()->fetch_object()){
        $skole[] = new SkolaSminkanja($red->id, $red->cena, $red->datumOd, $red->datumDo);
    }
    
}

include("prikazSkolaTabela.php");

?>