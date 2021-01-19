<header class="chaptershead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-5 text-uppercase "><?=$article['title']?></h1>
        </div>
    </div>
</header>

<div class= "chapterContent container-lg">
    <h2><?=$article['title']?></h2>
    <p><?=$article['content']?></p>
</div>

<div class= "commentaryContent container-lg">

    <h2>Commentaires</h2>

    <form method="post" action="../addComment" class="default-form">
        <legend>Ajouter un commentaire</legend>
        <div class="form-group">
            <label for="name">Nom</label><br />
            <input type="text" class="form-control" id="name" name="name" maxlength="255" required/>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire</label><br />
            <textarea class="form-control" id="comment" name="comment" maxlength="1500" rows="10" required></textarea>
        </div>
        <div id="the-count">
            <span id="current">0</span>
            <span id="maximum">/ 300</span>
        </div>
        <div class="form-group">
            <input type="hidden" name="post_id" value="<?= $article['id'] ?>" />
            <button type="submit" name="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>


    <?php if(isset($_GET['flagOk']))
            {
                $message = "Le commentaire a bien été signalé ! Merci.";
                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
                ?>
                <!-- Au cas où je voudrais modifier le style de la fenetre de pop up:
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script>
                    $( function() {
                        $( "#dialog" ).dialog();
                    } );
                </script>
                
                <div id="dialog" title="Basic dialog">
                <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
                </div>
                -->
                <?php } ?>


    <?php if(isset($_GET['comOk'])){
                $messageCom = "Le commentaire a été ajouté ! Merci !";
                echo '<script type="text/javascript">window.alert("'.$messageCom.'");</script>';
            } ?>


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
                        <!-- Ligne suivante à effacer ?--> 
                        <input type="hidden" name="id" value="<?= $comment['id'] ?>" /> 
                            <form method="post" action="../flagComment">
                                <div>
                                    <input type="hidden" name="id" value="<?= $comment['id'] ?>" />
                                    <input type="hidden" name="post_id" value="<?= $article['id'] ?>" />
                                    <input type="submit" onclick="return confirm('Attention vous vous apprêtez à signaler un commentaire. Continuer ?');" value="Signaler ce commentaire"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


