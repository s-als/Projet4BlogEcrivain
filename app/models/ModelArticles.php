<?php
class ModelArticles extends ModelMain{

    

    public function __construct(){
        $this->table = "posts";
        $this->getConnection();
    }

    public function findByChapterTitle(string $chapterTitle){
        $chapterTitleWithSpace = str_replace('_', ' ', $chapterTitle);
        $sql = "SELECT * FROM ". $this->table ." WHERE title='" .$chapterTitleWithSpace."'";
        return parent::queryAndfetch($sql);
    }

    /*public function findByChapterID($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id=" .$id;
        $query = $this->_connection->prepare($sql);
        $query->execute();
        return $query->fetch();
    }*/

    public function findByChapterID($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id=" .$id;
        return parent::queryAndfetch($sql);
    }




}