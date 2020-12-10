<?php

abstract class Controller
{
    public function loadModel(string $model){
        require_once(ROOT. 'app/models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render($viewName, array $data =[]){
        extract($data);

        //Turn on output buffering:
        ob_start();

        require_once(ROOT.'app/views/'. $viewName .'.php');

        $content = ob_get_clean();

        require_once(ROOT.'app/views/layouts/default.php');
    }
}