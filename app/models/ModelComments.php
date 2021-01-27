<?php

class ModelComments extends ModelMain{

    
    public function __construct(){
        $this->table = "comments";
        $this->getConnection();
    }
    
    public function findCommentsByPostID($postID){
        $sql = "SELECT * FROM ". $this->table ." WHERE post_id= :postID";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':postID' => $postID));
        return $prepare->fetchAll();
    }

    public function findByID($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id= :id";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function addCommentToDBB($name, $comment, $post_id){
        $sql = "INSERT INTO ". $this->table ." (name, comment, post_id) VALUES(:name, :comment, :post_id)";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':name' => $name, ':comment' => $comment, ':post_id' => $post_id));
        return $prepare->fetch();
    }

    public function deleteComment($id){
        $sql = "DELETE FROM ". $this->table ." WHERE id= :id";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function editCom($id, $editedName, $editedCom){
        $sql = "UPDATE ". $this->table ." SET name = :editedName, comment = :editedCom WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':editedName' => $editedName, ':editedCom' => $editedCom, ':id' => $id));
        return $prepare->fetch();
    }
    
    public function addFlag($id){
        $sql = "UPDATE ". $this->table ." SET flag = '1' WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function removeFlag($id){
        $sql = "UPDATE ". $this->table ." SET flag = '0' WHERE id= :id" ;
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function getflagedComments(){
        $sql = "SELECT * FROM ". $this->table ." WHERE flag=1";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll();
    }

    public function deleteChapterComments($postId){
        $sql = "DELETE FROM ". $this->table ." WHERE post_id= :postId";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':postId' => $postId));
        return $prepare->fetchAll();
    }
    
}