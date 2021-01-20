<header class="chaptershead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-5 text-uppercase" id="sommaire">Sommaire</h1>
        </div>
    </div>
</header>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4" id="allChapters">
    <?php foreach($articles as $article):?>
        <?php $count = 0;?>

        <?php foreach($comments as $comment):
            if($comment['post_id'] == $article['id']){
            $count = $count + 1;}?>
        <?php endforeach; ?>

        <div class="col">
            <a href="/articles/chapitre/<?= str_replace(' ', '_', $article['id'])?>">
                <div class="card h-100">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$article['title']?></h5>
                        <p class="card-text"><?=substr($article['content'],0, 200);?>[...]</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?= 'Commentaires (' .$count. ')'?></small>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>


<!-- Contact-->
<section class="contact-section bg-black">
    <div class="social d-flex justify-content-center">
        <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="mx-2" href="https://github.com/s-als/Projet4BlogEcrivain"><i class="fab fa-github"></i></a>
    </div>
</section>