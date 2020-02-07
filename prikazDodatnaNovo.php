<?php

include("databaseNovo.php");
include("proizvod.php");

$crud = new DatabaseNovo("makeupstudiobojanvukadinov");

$proizvodi = array();

if (!isset ($_GET["id"])){
    echo "Parametar ID nije prosleđen!";
    } else {
    $pomocna=$_GET["id"];
    
    if($pomocna=="4"){
        $crud->select();
        while($red=$crud->getResult()->fetch_object()){
            $proizvodi[] = new Proizvod($red->id, $red->naziv, $red->slika, $red->cena);
        }
    }else{
        $crud->select("*", "proizvodi", "kategorija=$pomocna");
        while($red=$crud->getResult()->fetch_object()){
            $proizvodi[] = new Proizvod($red->id, $red->naziv, $red->slika, $red->cena);
        }
    }
    
}

include("prikazProizvodaTabelaNovo.php");

?>