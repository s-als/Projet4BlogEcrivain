<?php

class HomeController extends Controller
{
    //Load models and send data to view Home:
    public function index(){
        $this->loadModel("ModelLogin");
        $about = $this->ModelLogin->getAbout();

        $this->loadModel("ModelLogin");
        $contacts = $this->ModelLogin->getContact();
        $userName = $this->ModelLogin->getUserName();

        $this->render('home', compact('about', 'contacts', 'userName'));
    }
}

