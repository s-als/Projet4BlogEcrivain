<?php




class Router 
{


    public function requestRoute (){
        $params = explode('/', $_GET['p']);

        if($params[0] != ""){
            $controller = ucfirst($params[0]);
            $action = isset($params[1]) ? $params[1] : 'index';
            
            require_once(ROOT.'app/controllers/'.$controller.'.php');

            $controller = new $controller();

            if(method_exists($controller, $action)){
                unset($params[0]);
                unset($params[1]);
                call_user_func_array([$controller, $action], $params);
                //$controller->$action();
            } else {
                http_response_code(404);
                echo "La page demandée n'existe pas";
            }
            

        }else{
            
        }
    }
        
}



