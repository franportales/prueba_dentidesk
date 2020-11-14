<?php

class DB {
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    
    function __construct($dataBaseName) {
        $this->dbhost = dbhost;
        $this->dbuser = dbuser;
        $this->dbpass = dbpass;
        $this->dbname = $dataBaseName;
    }
    
    function getConnection() {
        $dbh = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname;charset=utf8", $this->dbuser, $this->dbpass);
        //$dbh->exec("set names utf8");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    
    function getResultSelect($sql){
        
        $stmt = $this->getConnection()->query($sql);
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
        
    }
    
    function getResultUpInDe($sql){
 
        $stmt = $this->getConnection()->query($sql);
        
    }
    
}

$bd_central = new DB(db);


$GLOBALS['bd_central'] = new DB(db);
