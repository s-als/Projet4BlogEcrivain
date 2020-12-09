<?php
    require ('app/controllers/Router.php');
    require ('app/config/config.php');
    //define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

    require_once (ROOT.'app/controllers/Controller.php');
    require_once (ROOT.'app/models/ModelMain.php');

    $router = new Router();
    $router->requestRoute();


?>