<?php
class ModelArticles extends ModelMain{

    

    public function __construct(){
        $this->table = "posts";
        $this->getConnection();
    }

    public function findByChapterTitle(string $chapterTitle){
        $chapterTitleWithSpace = str_replace('_', ' ', $chapterTitle);
        $sql = "SELECT * FROM ". $this->table ." WHERE title='" .$chapterTitleWithSpace."'";
        $query = $this->_connection->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}