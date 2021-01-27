<!-- Show selected chapter and all comments for that one -->

<header class="chaptershead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-5 text-uppercase" id="chptPageTitle"><?=$article['title']?></h1>
        </div>
    </div>
</header>


<!-- Chapter -->
<div class= "chapterContent container-lg">
    <h2><?=$article['title']?></h2>
    <?=$article['content']?>
</div>


<!-- Comments -->
<div class= "commentaryContent container-lg">

    <h2>Commentaires</h2>

    <!-- Add a comment -->
    <form method="post" action="../addComment" class="default-form">
        <fieldset><legend>Ajouter un commentaire</legend></fieldset>
        <div class="form-group">
            <label for="name">Nom</label><br />
            <input type="text" class="form-control" id="name" name="name" maxlength="255" required/>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire</label><br />
            <textarea class="form-control" id="comment" name="comment" maxlength="1000" rows="10" required></textarea>
        </div>
        <div id="the-count">
            <span id="current">0</span>
            <span id="maximum">/ 1000</span>
        </div>
        <div class="form-group">
            <input type="hidden" name="post_id" value="<?= $article['id'] ?>" />
            <button type="submit" name="submit" class="btn btn-gold">Valider</button>
        </div>
    </form>

    <!-- Confirmation if a comment was flaged -->
    <?php if(isset($_GET['flagOk']))
            {
                $message = "Le commentaire a bien été signalé ! Merci.";
                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            } 
    ?>

    <!-- Confirmation if a new comment is written -->
    <?php if(isset($_GET['comOk'])){
                $messageCom = "Le commentaire a été ajouté ! Merci !";
                echo '<script type="text/javascript">window.alert("'.$messageCom.'");</script>';
            } 
    ?>

    <!-- Show all comments -->
    <div class="container-xxl">
        <div class="row">
            <?php foreach($comments as $comment): ?>
                <div class="row row-cols-1 comment">
                    <div class="col-md-8 commentDiv">
                        <div class="mb-15">
                            <h5 class="mb-0"><?=$comment['name']?></h5>
                            <span class="g-color-gray-dark-v4 g-font-size-12"><?=$comment['create_date']?></span>
                        </div>
                        <div class="mb-15 comment-text">
                            <?=$comment['comment']?>
                        </div>
                        <div class="mb-15 comment-flag">
                            <form method="post" action="../flagComment">
                                <div>
                                    <input type="hidden" name="id" value="<?= $comment['id'] ?>" />
                                    <input type="hidden" name="post_id" value="<?= $article['id'] ?>" />
                                    <input id='flagBtn' type="submit" onclick="return confirm('Attention vous vous apprêtez à signaler un commentaire. Continuer ?');" value="Signaler ce commentaire"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>