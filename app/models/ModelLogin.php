<?php

class ModelLogin extends ModelMain{

    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function getAbout(){
        $sql = "SELECT about FROM ". $this->table ." WHERE id=1";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute();
        return $prepare->fetch();
    }
    
    public function getUser($email, $password){
        $sql = "SELECT * FROM ". $this->table ." WHERE email= :email and password= :password";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':email' => $email, ':password' => $password));
        return $prepare->fetch();
    }

    public function getUserName(){
        $sql = "SELECT name FROM ". $this->table ." WHERE id=1";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array());
        return $prepare->fetch();
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM ". $this->table ." WHERE email= :email";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':email' => $email));
        return $prepare->fetch();
    }

    public function getUserByRoles($roles){
        $sql = "SELECT * FROM ". $this->table ." WHERE roles= :roles";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':roles' => $roles));
        return $prepare->fetch();
    }

    public function changePwd($newPwd, $id){
        $hashed_password = password_hash($newPwd, PASSWORD_DEFAULT);
        $sql = "UPDATE ". $this->table ." SET password = '$hashed_password' WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function changeName($newName, $id){
        $sql = "UPDATE ". $this->table ." SET name = :newName WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id, ':newName' => $newName));
        return $prepare->fetch();
    }

    public function changeEmail($newEmail, $id){
        $sql = "UPDATE ". $this->table ." SET email = :newEmail WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id, ':newEmail' => $newEmail));
        return $prepare->fetch();
    }

    public function changeAbout($newAbout, $id){
        $sql = "UPDATE ". $this->table ." SET about = :newAbout WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id, ':newAbout' => $newAbout));
        return $prepare->fetch();
    }

    public function changeContact($newTwitter, $newFacebook, $newPhone, $newAdress, $id){
        $sql = "UPDATE ". $this->table ." SET twitter = :newTwitter, facebook = :newFacebook, phone = :newPhone, adress = :newAdress WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id, ':newTwitter' => $newTwitter, ':newFacebook' => $newFacebook, 'newPhone' => $newPhone, 'newAdress' => $newAdress));
        return $prepare->fetch();
    }

    public function getContact(){
        $sql = "SELECT email, twitter, facebook, phone, adress FROM ". $this->table ." WHERE id=1";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll();
    }

}