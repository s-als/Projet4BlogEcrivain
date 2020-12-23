<?php

//namespace app\controllers;

class AdminController extends Controller
{
    
    public function index(){
        session_start(); 
        var_dump($_SESSION);
        if($this->isAdmin()){

        }

    }


    private function isAdmin(){

        if(isset($_SESSION['user']) && in_array("ROLE_ADMIN", $_SESSION['user']['roles'])) {

        };
    }





        //$this->loadModel("ModelArticles");
        //$articles = $this->ModelArticles->getAll();

        //$this->loadModel("ModelComments");
        //$comments = $this->ModelComments->getAll();

        //$this->render('admin', compact('articles', 'comments'));

    

}