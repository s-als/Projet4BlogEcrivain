<?php

//namespace app\model;

class ModelLogin extends ModelMain{


    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function getAbout(){
        $sql = "SELECT about FROM ". $this->table ." WHERE id=1";
        return parent::queryAndfetch($sql);
    }
    //Changer users par $this->table
    public function getUser($email, $password){
        $sql = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
        return parent::queryAndfetch($sql);
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM `users` WHERE email='$email'";
        return parent::queryAndfetch($sql);
    }

    public function getUserByRoles($roles){
        $sql = "SELECT * FROM `users` WHERE roles='$roles'";
        return parent::queryAndfetch($sql);
    }

    public function changePwd($newPwd, $id){
        $hashed_password = password_hash($newPwd, PASSWORD_DEFAULT);
        $sql = "UPDATE ". $this->table ." SET password = '$hashed_password' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function changeName($newName, $id){
        $sql = "UPDATE ". $this->table ." SET name = '$newName' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function changeEmail($newEmail, $id){
        $sql = "UPDATE ". $this->table ." SET email = '$newEmail' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function changeAbout($newAbout, $id){
        $sql = "UPDATE ". $this->table ." SET about = '$newAbout' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function changeContact($newTwitter, $newFacebook, $newPhone, $newAdress, $id){
        $sql = "UPDATE ". $this->table ." SET twitter = '$newTwitter', facebook = '$newFacebook', phone = '$newPhone', adress = '$newAdress' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }


}