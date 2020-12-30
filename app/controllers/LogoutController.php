<?php

class LogoutController extends Controller
{
    
    public function index(){

        if (isset($_SESSION)){
            session_unset();
            session_destroy();
            header("location: home");
            exit();
        }
    }
}


