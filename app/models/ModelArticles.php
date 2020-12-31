<?php

//namespace app\model;

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

    public function addChapterToDBB($newChapterTitle, $newChapterContent){
        $sql = "INSERT INTO ". $this->table ." (title, content) VALUES('$newChapterTitle', '$newChapterContent')";
        return parent::queryAndfetch($sql);
    }

    public function editChapterInDBB($id, $newChapterTitle, $newChapterContent){
        $sql = "UPDATE ". $this->table ." SET title = '$newChapterTitle', content = '$newChapterContent' WHERE id='$id'" ;
        return parent::queryAndfetch($sql);
    }



}