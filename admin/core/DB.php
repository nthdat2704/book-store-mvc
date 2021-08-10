<?php
class DB{
    private $host = "localhost";
    private $dbname = "bookstore";
    private $username = "root";
    private $password = "";
    private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $sql ="";
    private $DBH = "";

    function __construct(){

        $this->DBH = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password,$this->options);

    }
    function setQuery($sql_input){
        $this->sql =$sql_input;
    }

    function fetchOne(){
        $statement = $this->DBH->prepare($this->sql);
        $statement->execute();
        return  $statement->fetch();
    }

    function fetchAll(){
        $statement = $this->DBH->prepare($this->sql);
        $statement->execute();
        return $statement->fetchAll();
    }
    function insertData(){
        $this->DBH->exec($this->sql);
    }
    function updateData(){
        
        $this->DBH->exec($this->sql);

    }
    function deleteData(){
        $this->DBH->exec($this->sql);

    }


    function thucHienTruyVan(){
        $result = null;
        $result = $this->DBH->query($this->sql);
        return $result;
    }
    function thucHienLayThongTin(){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $stmt = $this->DBH->prepare($this->sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($DBH);
        }
    }
    function thucHienLenh(){
        $result = null;
        $result = $this->DBH->exec($this->sql);
        return $result;
    }
  
    function lastInsertID(){
        return $this->DBH->lastInsertID();
    }
 
}






?>