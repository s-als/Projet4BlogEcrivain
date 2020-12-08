<!--CSS-->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">




<?php
    require ('app/controllers/Router.php');
    define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

    $router = new Router();
    $router->requestRoute();


?>;