<?php

//namespace app\model;

class ModelLogin extends ModelMain{


    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function getUser($email, $password){
        $sql = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
        return parent::queryAndfetch($sql);
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM `users` WHERE email='$email'";
        return parent::queryAndfetch($sql);
    }

}