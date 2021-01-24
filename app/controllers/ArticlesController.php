<?php

class ArticlesController extends Controller
{
    //Load models and send data to the view with all Articles:
    public function index(){
        $this->loadModel("ModelArticles");
        $articles = $this->ModelArticles->getAll();
        
        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->getAll();

        $this->render('allArticles', compact('articles', 'comments'));
    }

    //Load models and send data to the view with one chapter:
    public function chapitre($URLparams3){
        $this->loadModel("ModelArticles");
        $article = $this->ModelArticles->findByChapterID($URLparams3);

        $this->loadModel("ModelComments");
        $comments = $this->ModelComments->findCommentsByPostID($URLparams3);

        $this->render('chapitre', compact('article', 'comments'));
    }

    public function addComment() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $post_id = $_POST['post_id'];
            $this->loadModel("ModelComments");
            $this->ModelComments->addCommentToDBB($name, $comment, $post_id);
            header('Location: chapitre/' . $post_id . '?comOk');
            exit();
        }
      }

    public function flagComment(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $post_id = $_POST['post_id'];
            $this->loadModel("ModelComments");
            $this->ModelComments->addFlag($id);
            header('Location: chapitre/'. $post_id . '?flagOk');
            exit();
        }
      }

}