<?php

//namespace app\controllers;

abstract class Controller
{
    public function loadModel(string $model){
        require_once(ROOT. 'app/models/'.$model.'.php');
        //$model = 'app\model\\' .$model;
        $this->$model = new $model();
    }

    public function render($viewName, array $data =[]){
        extract($data);

        //Turn on output buffering:
        ob_start();

        require_once(ROOT.'app/views/'. $viewName .'.php');

        $content = ob_get_clean();

        if (stripos($viewName, 'admin') !== FALSE){
            require_once(ROOT.'app/views/layouts/defaultAdmin.php');
        } else
        require_once(ROOT.'app/views/layouts/default.php');
    }
}