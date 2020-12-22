<?php
session_start();

class LoginController extends Controller
{
    public function login() {
        if (isset($_POST['submit'])){
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $this->loadModel("ModelLogin");
            $allUsers = $this->ModelLogin->getAll();
            $user = $this->ModelLogin->getUser();
            
            if($user->rowcount() > 0){
                if (password_verify($password, $user[0]["password"] ))
                {
                    echo 'Connexion réussit !';
                    $_SESSION['email'] = $email;
                }
            }else{
                $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            }
        }
    }
        

}


