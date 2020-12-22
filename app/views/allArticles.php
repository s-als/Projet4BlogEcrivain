<header class="chaptershead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-5 text-uppercase ">Sommaire</h1>
        </div>
    </div>
</header>

<div class="container-xxl">
    <div class="row">
        <?php foreach($articles as $article): ?>
            <div class="col-lg-4">
                <a href="/articles/chapitre/<?= str_replace(' ', '_', $article['id'])?>">
                <div class="row">
                    <div class="col-5">
                        <img class="img-fluid" src="public/images/book-picture4.png" alt="" />
                    </div>
                    <div class="col-3">
                        <?=$article['title']?>
                    </div>
                </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Contact-->
<section class="contact-section bg-black">
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/s-als/Projet4BlogEcrivain"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>