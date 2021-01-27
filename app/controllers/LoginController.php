<?php

class LoginController extends Controller
{
    private $errorMsg = ['errMsg' => ""];
    
    //Load login page:
    public function index(){

        //Check if admin is already login:
        if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN') {
            header("location: ../admin");
            exit();
        };

        //Error messages if login is incomplete or false:
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyInput") {
                $this->errorMsg = ['errMsg' => "Veuillez renseigner tous les champs."];
            } else if ($_GET["error"] == "invalidLogin") {
                $this->errorMsg = ['errMsg' => "L'email et / ou le mot de passe sont incorrects."];
            } 
        }

        $this->render('login', $this->errorMsg);
    }

    
    public function checkLoginInput()
    {    
        if (isset($_POST["submit"])) {

            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);

            if (empty($email) || empty($password)) {
                header("location: ../login?error=emptyInput");
                exit();
            } 

            if ($this->checkEmailAndPwd($email, $password) == FALSE) {
                header("location: ../login?error=invalidLogin");
                exit();
            }
            
            if ($this->checkEmailAndPwd($email, $password) == TRUE) {
                header("location: ../admin");
                exit();
            }

        } else {
            header("location: ../login");
            exit();
        }
    }

    public function checkEmailAndPwd($email, $password) {
        $this->loadModel("ModelLogin");
        $user = $this->ModelLogin->getUserByEmail($email);
            if ($user == TRUE) {
                $pwdVerified = password_verify($password, $user['password']);
                if ($pwdVerified == TRUE) {
                    $_SESSION["userEmail"] = $user['email'];
                    $_SESSION["userRole"] = $user['roles'];
                    $_SESSION["userID"] = $user['id'];
                    $_SESSION["userName"] = $user['name'];
                    $_SESSION["about"] = $user['about'];
                }
                //Erase $user informations and send booleen response of pwdVerified:
                $user = $pwdVerified;
                return $user;
            }
        return $user;
    }

}


