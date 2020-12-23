<?php

//namespace app\controllers;

class AdminController extends Controller
{
    
    //private $errorMsg = "";

    public function index(){
        if (isset($_POST["submit"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];
        //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if (empty($email) || empty($password)) {
            header("location: login?error=emptyInput");
            exit();
        }
        //$*UnMdpsupersecure48^ù%de4%
        if ($this->checkLogin($email, $password) == FALSE) {
            header("location: login?error=invalidLogin");
            exit();
        }
        

        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();

        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->getAll();

        $this->render('admin', compact('articles', 'comments'));
        
        }
        else {
            header("location: login");
            exit();
        }
    }


    /*private function isAdmin(){

        if(isset($_SESSION['user']) && in_array("ROLE_ADMIN", $_SESSION['user']['roles'])) {

        };
    }*/

    public function checkLogin($email, $password) {
        $this->loadModel("ModelLogin");
        $user = $this->ModelLogin->getUserByEmail($email);
            if ($user == TRUE) {
                $user = password_verify($password, $user['password']);
            }
        return $user;
    }

}