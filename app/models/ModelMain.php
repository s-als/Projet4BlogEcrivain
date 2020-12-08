<?php

abstract class ModelMain
{
    private $host = "localhost";
    private $db_name = "jf_alaska";
    private $username = "root";
    private $password = "";

    protected $_connection;

    public $table;
    public $id;

    public function getConnection(){
        $this->_connection = null;

        try{
            $this->_connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->password);
            $this->_connection->exec('set names utf8');
        }catch(PDOException $exception){
            echo 'Erreur : '. $exception->getMessage();
        }
    }
    
}