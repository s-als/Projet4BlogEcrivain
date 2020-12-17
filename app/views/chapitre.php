


<header class="chaptershead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-5 text-uppercase "><?=$article['title']?></h1>
        </div>
    </div>
</header>


<p><?=$article['content']?></p>

<h2>Commentaires</h2>

<form action="">
    <div>
        <label for="name">Auteur</label><br />
        <input type="text" id="name" name="name" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<div class="container-xxl">
    <div class="row">
        <?php foreach($comments as $comment): ?>
            <div class="col-lg-4">
                <?=$comment['name']?>
                <?=$comment['comment']?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
