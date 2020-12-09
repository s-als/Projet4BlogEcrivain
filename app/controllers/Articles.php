<?php

class Articles extends Controller
{
    public function index(){
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();

        $this->render('index', compact('articles'));
    }


    public function read($id, $slug){
        echo $id;
        echo $slug;
    }

}

