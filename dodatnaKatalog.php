<?php

include("databaseNovo.php");
include("proizvod.php");

$crud = new DatabaseNovo("makeupstudiobojanvukadinov");



$proizvodi = array();

$crud->select();
while($red=$crud->getResult()->fetch_object()){
    $proizvodi[] = new Proizvod($red->id, $red->naziv, $red->slika, $red->cena);
}

session_start();

if(!isset($_SESSION['korpa'])){
    $_SESSION['korpa'] = array();
}

if(isset($_POST['submit']) && $_POST['submit']=='kupi'){
    $_SESSION['korpa'][] = $_POST['id'];
    header('Location: dodatnaKatalog.php');
    exit();
}

if(isset($_POST['submit']) && $_POST['submit']=='Isprazni'){
    unset($_SESSION['korpa']);
    header('Location: ?vidi_korpu');
    exit();
}

if(isset($_GET['vidi_korpu'])){
    $korpa = array();
    $ukupno=0;
    $proizvodiId1='';
    foreach($_SESSION['korpa'] as $id){
        foreach($proizvodi as $proizvod){
            if($proizvod->getId()==$id){
                $korpa[]=$proizvod;
                $ukupno+=$proizvod->getCena();
                $proizvodiId1.=$proizvod->getId().', ';
            }
        }
    }

    $proizvodiId = trim($proizvodiId1, ',');

    include("korpa.php");
    exit();
}

include("katalog.php");

?>