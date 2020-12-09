<?php

abstract class Controller
{
    public function loadModel(string $model){
        require_once(ROOT. 'app/models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render(string $file, array $data =[]){
        extract($data);
        require_once(ROOT.'app/views/'.strtolower(get_class($this)). '/'. $file.'.php');
    }
}