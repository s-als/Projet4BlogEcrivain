<?php
    require ('app/controllers/Router.php');
    require ('app/config/config.php');
    //require ('app/views/head.php');

    require_once (ROOT.'app/controllers/Controller.php');
    require_once (ROOT.'app/models/ModelMain.php');

    $router = new Router();
    $router->requestRoute();
?>

