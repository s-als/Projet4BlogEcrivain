<?php

class ArticlesController extends Controller
{
    public function index(){
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();

        $this->render('allArticles', compact('articles'));
    }


    public function chapitre($URLparams3){
        $this->loadModel("ModelArticles");
        $article = $this->ModelArticles->findByChapterTitle($URLparams3);
        $this->render('chapitre', compact('article'));
    }

}

