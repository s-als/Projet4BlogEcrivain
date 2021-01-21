<?php

class Router 
{
    //Get URL and apply our URL logic : http://sitename/controller/action/
    public function requestRoute (){

        session_start();
        
        try
        {   //Check URL:
            if(isset($_GET['url'])) {

                //Put URL informations in variables:
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);


                //Create variables to match our files names structure:
                $controller = ucfirst($url[0]);
                $controllerClass = $controller."Controller";
                $controllerFile = ROOT.'app/controllers/'.$controllerClass.'.php';
                $action = isset($url[1]) ? $url[1] : 'index';


                //If a filename correspond with url[0], create an objet:
                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $controllerObject = new $controllerClass();
                }
                

                //If a method exist in the object who was created above, call it:
                if(method_exists($controllerObject, $action)){
                    unset($url[0]);
                    unset($url[1]);

                    //Add a security level for access to admin page and actions:
                    if ($controller == 'Admin') {
                        if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN') {
                            call_user_func_array([$controllerObject, $action], $url);
                        } else {
                            header("location: ../login");
                            exit();
                        }
                    }
                    call_user_func_array([$controllerObject, $action], $url);

                } else {
                    throw new Exception("Erreur: la page demandée n'existe pas");
                }

            }else{ 
                require_once(ROOT.'app/controllers/HomeController.php');
                $controllerObject = new HomeController();
                $controllerObject->index();
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once(ROOT.'app/controllers/ErrorController.php');
            $controllerObject = new ErrorController();
            $controllerObject->index();
        }
    } 
}



