<?php
class ModelArticles extends ModelMain{


    public function __construct(){
        $this->table = "posts";
        $this->getConnection();
    }

}