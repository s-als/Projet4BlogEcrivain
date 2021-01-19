<?php

//namespace app\model;

class ModelComments extends ModelMain{

    
    public function __construct(){
        $this->table = "comments";
        $this->getConnection();
    }
    
    public function findCommentsByPostID($postID){
        $sql = "SELECT * FROM ". $this->table ." WHERE post_id=" .$postID;
        $query = $this->_connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function findByID($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id=" .$id;
        return parent::queryAndfetch($sql);
    }

    public function addCommentToDBB($name, $comment, $post_id){
        $sql = "INSERT INTO ". $this->table ." (name, comment, post_id) VALUES('$name', '$comment', '$post_id')";
        return parent::queryAndfetch($sql);
    }

    public function deleteComment($id){
        $sql = "DELETE FROM ". $this->table ." WHERE id=" .$id;
        return parent::queryAndfetch($sql);
    }

    public function editCom($id, $editedName, $editedCom){
        $sql = "UPDATE ". $this->table ." SET name = '$editedName', comment = '$editedCom' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }
    
    public function addFlag($id){
        $sql = "UPDATE ". $this->table ." SET flag = '1' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function removeFlag($id){
        $sql = "UPDATE ". $this->table ." SET flag = '0' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }

    public function getflagedComments(){
        $sql = "SELECT * FROM ". $this->table ." WHERE flag=1";
        return parent::queryAndfetchAll($sql);
    }
    
}