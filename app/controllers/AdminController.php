<?php

//namespace app\controllers;

class AdminController extends Controller
{
    
    //private $errorMsg = "";

    public function index(){

        if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN') {
            $this->showAdminPage();
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
                $pwdVerified = password_verify($password, $user['password']);
                if ($pwdVerified == TRUE) {
                    $_SESSION["userEmail"] = $user['email'];
                    $_SESSION["userRole"] = $user['roles'];
                    $_SESSION["userID"] = $user['id'];
                    $_SESSION["userName"] = $user['name'];
                    $_SESSION["about"] = $user['about'];
                }
                //Erase $user informations:
                $user = $pwdVerified;
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
        $flagedComments = $this->ModelComments->getflagedComments();

        $this->render('admin', compact('articles', 'comments', 'flagedComments'));
    }

    public function addChapter() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $newChapterTitle = $_POST['title'];
            $newChapterContent = $_POST['mytextarea'];

            $this->loadModel("ModelArticles");
            $this->ModelArticles->addChapterToDBB($newChapterTitle, $newChapterContent);
            
            header("location: ../admin");
            exit();
        }
    }

    public function editChapter() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $id = $_POST['chapterID'];
            $newChapterTitle = $_POST['title'];
            $newChapterContent = $_POST['mytextarea'];

            $this->loadModel("ModelArticles");
            $this->ModelArticles->editChapterInDBB($id, $newChapterTitle, $newChapterContent);

            header("location: ../admin");
            exit();
        }
    }

    public function modifyProfile() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $userID = $_SESSION["userID"];
            $this->loadModel("ModelLogin");

            if ($_POST['modifyType'] == "modifyName") {
                $newName = $_POST['newName'];
                $this->ModelLogin->changeName($newName, $userID);
                $_SESSION["userName"] = $newName; 

            } else if ($_POST['modifyType'] == "modifyEmail") {
                $newEmail = $_POST['newEmail'];
                $this->ModelLogin->changeEmail($newEmail, $userID);
                $_SESSION["userEmail"] = $newEmail;  

            } else if ($_POST['modifyType'] == "modifyPwd") {
                $newPwd = $_POST['newPwd'];
                $this->ModelLogin->changePwd($newPwd, $userID);

            } else if ($_POST['modifyType'] == "modifyAbout") {
                $newAbout = $_POST['newAbout'];
                $this->ModelLogin->changeAbout($newAbout, $userID);
                $_SESSION["about"] = $newAbout;

            } else if ($_POST['modifyType'] == "modifyContact") {
                $newTwitter = $_POST['newTwitter'];
                $newFacebook = $_POST['newFacebook'];
                $newPhone = $_POST['newPhone'];
                $newAdress = $_POST['newAdress'];
                $this->ModelLogin->changeContact($newTwitter,
                $newFacebook, $newPhone, $newAdress, $userID);
            } 

            header("location: ../admin");
            exit();
        }
    }

    public function removeflag(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $post_id = $_POST['post_id'];
            $this->loadModel("ModelComments");

            if (isset($_POST['valid'])) {
                $this->ModelComments->removeFlag($id);
            }
            elseif (isset($_POST['delete'])) {
                $this->ModelComments->deleteComment($id);
            }
            
            header("location: ../admin");
            exit();
        }
      }

}