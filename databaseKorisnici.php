<?php

class DatabaseKorisnici{
    private $hostname = 'localhost';
    private $dbname;
    private $username = "root";
    private $password = "";
    private $dblink;
    private $result;

    function __construct($dbname){
        $this->dbname = $dbname;
        $this->Connect();
    }

    function Connect(){
        $this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($this->dblink->connect_errno){
            echo "Greska prilikom konekcije";
            exit();
        }
    }

    function getResult(){
        return $this->result;
    }

    function insert($sql){

        if($this->ExecuteQuery($sql)){
            return true;
        }
        return false;
    }

    function ExecuteQuery($query){
        if($this->result=$this->dblink->query($query)){
            return true;
        }
        else return false;
    }
}



?>