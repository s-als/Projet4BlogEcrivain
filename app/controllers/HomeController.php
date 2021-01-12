<?php

//namespace app\controllers;

class HomeController extends Controller
{

    //public function index(){
        //$this->render('home');
    //}

    public function index(){
        $this->loadModel("ModelLogin");
        $about = $this->ModelLogin->getAbout();
        $this->render('home', compact('about'));
    }

}

