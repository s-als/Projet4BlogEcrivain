<?php

//namespace app\controllers;

class AdminController extends Controller
{
    
    public function index(){
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();

        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->getAll();

        $this->render('admin', compact('articles', 'comments'));

    }

}