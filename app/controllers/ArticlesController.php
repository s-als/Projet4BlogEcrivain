<?php

//namespace app\controllers;

class ArticlesController extends Controller
{
    public function index(){
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();
        $this->render('allArticles', compact('articles'));
    }


    /*public function chapitre($URLparams3){
        $this->loadModel("ModelArticles");
        $article = $this->ModelArticles->findByChapterTitle($URLparams3);
        $this->render('chapitre', compact('article'));
    }*/

    public function chapitre($URLparams3){
        $this->loadModel("ModelArticles");
        $article = $this->ModelArticles->findByChapterID($URLparams3);

        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->findCommentsByPostID($URLparams3);

        //$this->render('chapitre', compact('article', 'comments'));

        if ($_SERVER['REQUEST_METHOD'] == 'POST' /*&& $_SERVER['REDIRECT_URL'] =='/articles/chapitre/addComment'*/){

            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $post_id = $_POST['post_id'];
        
            $this->ModelComments->addCommentToDBB($name, $comment, $post_id);
            $this->ModelComments->addFlag($id);

            header('Location: ../chapitre/' . $post_id);
            exit();
            //echo "<script>location.replace=' .$post_id;</script>";
        }

        $this->render('chapitre', compact('article', 'comments'));
    }

    public function addComment($name, $comment, $post_id) {
        $this->loadModel("ModelComments");
        $this->ModelComments->addCommentToDBB($name, $comment, $post_id);
        $this->chapitre($post_id);
      }

      public function flagComment(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $post_id = $_POST['post_id'];
            $this->loadModel("ModelComments");
            $this->ModelComments->addFlag($id);
            header('Location: chapitre/'. $post_id);
            exit();
        }
      }
}