<!--CSS-->
<link href="/public/css/style.css" rel="stylesheet">
<link href="/public/css/bootstrap.min.css" rel="stylesheet">

<h1>Liste des articles</h1>

<?php foreach($articles as $article): ?>
    <h2><a href="/articles/chapitre/<?= str_replace(' ', '_', $article['title'])?>"><?=$article['title']?></a></h2>
    <p><?=$article['content']?></p>
<?php endforeach; ?>