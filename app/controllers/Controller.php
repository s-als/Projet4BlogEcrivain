<?php

abstract class Controller
{
    public function loadModel(string $model){
        require_once(ROOT. 'app/models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render(string $file, array $data =[]){
        extract($data);

        //Turn on output buffering:
        ob_start();

        require_once(ROOT.'app/views/'.strtolower(get_class($this)). '/'. $file.'.php');

        $content = ob_get_clean();

        require_once(ROOT.'app/views/layouts/default.php');
    }
}