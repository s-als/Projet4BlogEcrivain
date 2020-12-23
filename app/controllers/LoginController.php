<?php
//session_start();

class LoginController extends Controller
{
    private $errorMsg = ['errMsg' => ""];
    

    public function index(){

        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyInput") {
                $this->errorMsg = ['errMsg' => "Veuillez renseigner tous les champs."];
            } else if ($_GET["error"] == "invalidLogin") {
                $this->errorMsg = ['errMsg' => "L'email et / ou le mot de passe sont incorrectes."];

            } 
            
        }

    $this->render('login', $this->errorMsg);
    }

    public function invalidLogin($email, $password) {
        $this->loadModel("ModelLogin");
        $user = $this->ModelLogin->getUser($email, $password);
        return $user;
    }

}


