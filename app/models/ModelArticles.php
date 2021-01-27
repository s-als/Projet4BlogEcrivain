<?php

class ModelArticles extends ModelMain{

    
    public function __construct(){
        $this->table = "posts";
        $this->getConnection();
    }

    public function findByChapterTitle(string $chapterTitle){
        $chapterTitleWithSpace = str_replace('_', ' ', $chapterTitle);
        $sql = "SELECT * FROM ". $this->table ." WHERE title= ?";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array($chapterTitleWithSpace));
        return $prepare->fetch();
    }

    public function findByChapterID($id){
        $sql = "SELECT * FROM ". $this->table ." WHERE id= :id";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function addChapterToDBB($newChapterTitle, $newChapterContent){
        $sql = "INSERT INTO ". $this->table ." (title, content) VALUES(:newChapterTitle, :newChapterContent)";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':newChapterTitle' => $newChapterTitle, ':newChapterContent' => $newChapterContent));
        return $prepare->fetch();
    }

    public function editChapterInDBB($id, $newChapterTitle, $newChapterContent){
        $sql = "UPDATE ". $this->table ." SET title = :newChapterTitle, content = :newChapterContent WHERE id= :id";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':newChapterTitle' => $newChapterTitle, ':newChapterContent' => $newChapterContent, ':id' => $id));
        return $prepare->fetch();
    }

    public function deleteChapterInDBB($id){
        $sql = "DELETE FROM ". $this->table ." WHERE id= :id";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute(array(':id' => $id));
        return $prepare->fetch();
    }

    public function chaptersAutoIncrementReset(){
        $sql = "ALTER TABLE ". $this->table ." AUTO_INCREMENT=1";
        $prepare = $this->_connection->prepare($sql);
        $prepare->execute();
        return $prepare->fetch();
    }

}