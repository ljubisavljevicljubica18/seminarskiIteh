<?php

class Database{
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

    function select($kol = "*", $tabela, $where=null, $order=null){
        $select = 'SELECT '.$kol.' FROM '.$tabela;
        if($where!=null){
            $select.=' WHERE '.$where;
        }
        if($order!=null){
            $select.=' ORDER BY '.$order;
        }

        if($this->ExecuteQuery($select)){
            return true;
        }
        return false;
    }

    function delete($tabela, $where){
        $delete = 'DELETE FROM '.$tabela.' WHERE id= '.$where;

        if($this->ExecuteQuery($delete)){
            return true;
        }
        return false;
    }

    function insert($tabela, $korisnik, $komentar, $kolone){
        $insert = 'INSERT INTO '.$tabela.' ('.$kolone.') VALUES ("'.$korisnik.'", "'.$komentar.'")';

        if($this->ExecuteQuery($insert)){
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