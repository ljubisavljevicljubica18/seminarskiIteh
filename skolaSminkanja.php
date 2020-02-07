<?php

class SkolaSminkanja{
    public $id;
    private $mesto;
    private $cena;
    public $datumOd;
    public $datumDo;

    function __construct($id, $cena, $datumOd, $datumDo){
        $this->id = $id;
        $this->cena = $cena;
        $this->datumOd = $datumOd;
        $this->datumDo = $datumDo;
    }

    public function getId(){
        return $this->id;
    }

    public function getCena(){
        return $this->cena;
    }

    public function setCena($cena){
        $this->cena = $cena;
    }

    public function getDatumOd(){
        return $this->datumOd;
    }

    public function setDatumOd($datumOd){
        $this->datumOd = $datumOd;
    }

    public function getDatumDo(){
        return $this->datumDo;
    }

    public function setDatumDo($datumDo){
        $this->datumDo = $datumDo;
    }

}




?>