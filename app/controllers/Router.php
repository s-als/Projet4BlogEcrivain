<?php

class Router 
{
    public function requestRoute (){
        try
        {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                $controller = ucfirst($url[0]);
                $controllerClass = $controller."Controller";
                $controllerFile = ROOT.'app/controllers/'.$controllerClass.'.php';
                $action = isset($url[1]) ? $url[1] : 'index';

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $controller = new $controllerClass();
                }
                
                if(method_exists($controller, $action)){
                    unset($url[0]);
                    unset($url[1]);
                    call_user_func_array([$controller, $action], $url);
                    //$controller->$action();
                } else {

                    throw new Exception("Erreur: la page demandée n'existe pas");
                    //http_response_code(404);
                    //echo "La page demandée n'existe pas";
                }

            }else{ 
                require_once(ROOT.'app/controllers/HomeController.php');
                $controller = new HomeController();
                $controller->index();
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            echo $errorMsg;
        }

        

    } 
}



