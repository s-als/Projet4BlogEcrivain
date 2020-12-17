<?php
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

    /*public function addComment($data){
        $sql = "INSERT INTO ". $this->table ."(name, create_date, comment, post_id) VALUES(?, ?, ?, NOW())'";
    }*/
}