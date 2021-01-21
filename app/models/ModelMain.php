<?php

abstract class ModelMain
{
    private $host = "localhost";
    private $db_name = "jf_alaska";
    private $charset = "utf8";
    private $username = "root";
    private $password = "";

    protected $_connection;

    public $table;
    public $id;


    public function getConnection(){
        $this->_connection = null;

        try{
            $this->_connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name.';charset='.$this->charset, $this->username, $this->password);
        }catch(PDOException $exception){
            echo 'Erreur : '. $exception->getMessage();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll();
    }
    
}