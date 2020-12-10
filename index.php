<!--<link href="/public/css/bootstrap.min.css" rel="stylesheet">
<link href="/public/css/style.css" rel="stylesheet">-->

<?php
    require ('app/controllers/Router.php');
    require ('app/config/config.php');
    require ('app/config/HTMLhead.php');

    require_once (ROOT.'app/controllers/Controller.php');
    require_once (ROOT.'app/models/ModelMain.php');

    $router = new Router();
    $router->requestRoute();
?>

