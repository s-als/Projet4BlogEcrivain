<?php

class AdminController extends Controller
{
    //Load models and send data to view:
    public function index(){

        //Check if user is connect and is admin:
        if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN') {
            
            $this->loadModel("ModelArticles");
            $articles = $this->ModelArticles->getAll();

            $this->loadModel("ModelComments");
            $comments = $this->ModelComments->getAll();
            $flagedComments = $this->ModelComments->getflagedComments();

            $this->loadModel("ModelLogin");
            $contacts = $this->ModelLogin->getContact();

            $this->render('admin', compact('articles', 'comments', 'flagedComments', 'contacts'));
        }
        
        else {
            header("location: login");
            exit();
        }
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

    public function editCom() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $id = $_POST['id'];
            $editedName = $_POST['name'];
            $editedCom = $_POST['mytextarea'];
            $this->loadModel("ModelComments");
            
            if (isset($_POST['valid'])) {
                $this->ModelComments->editCom($id, $editedName, $editedCom);
            }
            elseif (isset($_POST['delete'])) {
                $this->ModelComments->deleteComment($id);
            }

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
        }
      }

}