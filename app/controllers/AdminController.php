<?php

//namespace app\controllers;

class AdminController extends Controller
{
    
    //private $errorMsg = "";

    public function index(){

        if (isset($_SESSION["userEmail"])) { 
            if ($_SESSION["userRole"] == 'ADMIN') {
                $this->showAdminPage();
            }
        };
        

        if (isset($_POST["submit"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];
        //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if (empty($email) || empty($password)) {
            header("location: login?error=emptyInput");
            exit();
        } 


        if ($this->checkEmailAndPwd($email, $password) == FALSE) {
            header("location: login?error=invalidLogin");
            exit();
        }
        
        $this->showAdminPage();
        
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

    public function checkEmailAndPwd($email, $password) {
        $this->loadModel("ModelLogin");
        $user = $this->ModelLogin->getUserByEmail($email);
            if ($user == TRUE) {
                $pwdOk = password_verify($password, $user['password']);
                if ($pwdOk == TRUE) {
                    $_SESSION["userEmail"] = $user['email'];
                    $_SESSION["userRole"] = $user['roles'];
                }
                //Erase $user informations:
                $user = $pwdOk;
                return $user;
            }
        return $user;
    }

    /*public function checkRoles($roles) {
        $this->loadModel("ModelLogin");
        $usersByRole = $this->ModelLogin->getUserByRoles($roles);
        return $userByRole;
    }*/

    public function showAdminPage() {
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();

        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->getAll();

        $this->render('admin', compact('articles', 'comments'));
    }

}