<?php

//namespace app\model;

class ModelLogin extends ModelMain{


    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function getUser($email, $password){
        $sql = "SELECT * FROM `users` WHERE email='$email' and password='".hash('sha256', $password)."'";
        return parent::queryAndfetch($sql);
    }



}