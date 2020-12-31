<div class="container-xl" id="adminMainContainer">


  

<!--<div class="container-xl" id="adminCreateArticle">

Rédiger un nouveau chapitre

  <form method="post" action="admin/addChapter">
      <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
      </div>

      <div>
        <textarea id="mytextarea" name="mytextarea"> </textarea>
      </div>

      <div>
        <input type="submit" />
      </div>
  </form>

</div>-->

<div class="container-xl" id="adminEditArticle">

Editer un chapitre


    <!--<div class="row">
        <?php foreach($articles as $article): ?>
            <div class="col-lg-4">
                <a href="/articles/chapitre/<?= str_replace(' ', '_', $article['id'])?>">
                <div class="row">
                    <div class="col-3">
                        <?=$article['title']?>
                    </div>
                </div>
                </a>
				<?=$article['content']?>
            </div>
        <?php endforeach; ?>
    </div>-->




</div>

<div class="container-xl" id="adminCommmentary">Commentaires</div>

<div class="container-xl" id="adminProfile">Profil</div>


</div>



<ul class="nav nav-tabs" id="myUpperTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="chapters-tab" data-bs-toggle="tab" href="#chapters" role="tab" aria-controls="chapters" aria-selected="true">Chapitres</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="commentaries-tab" data-bs-toggle="tab" href="#commentaries" role="tab" aria-controls="commentaries" aria-selected="false">Commentaires</a>
  </li>
</ul>
<div class="tab-content" id="myUpperTabContent">
  <div class="tab-pane fade show active" id="chapters" role="tabpanel" aria-labelledby="chapters-tab"><ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php 
        $divTab ='';
        $divCom =''
    ?>


    <?php foreach($articles as $article): ?>

        <li class="nav-item" role="presentation">
            <a class="nav-link" id=<?= str_replace(" ", "", $article['title']). "-tab"?> data-bs-toggle="tab" href=<?= "#". str_replace(" ", "", $article['title']);?> role="tab" aria-controls=<?= str_replace(" ", "", $article['title']);?> aria-selected="true"><?=$article['title']?></a>
        </li>


        <?php //$divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>' .$article["content"].'</div>'
        ?>

		<?php $divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>
			<form method="post" action="admin/editChapter">
				<div>
					<label for="title">Titre</label><br />
					<input type="text" id="title" name="title" value="Chapitre '.$article["id"].'" >
				</div>

				<div>
					<textarea class="myeditablediv" name="mytextarea">'.$article["content"].' </textarea>
				</div>

				<div>
					<input type="hidden" name="chapterID" value="'.$article["id"].'" />
					<input type="submit" />
				</div>
			</form>
		</div>'
        ?>
  
    <?php endforeach; ?>

	<li class="nav-item" role="presentation">
    	<a class="nav-link" id="newChapter-tab" data-bs-toggle="tab" href="#newChapter" role="tab" aria-controls="contact" aria-selected="false">Créer un nouveau chapitre</a>
  	</li>
 </ul>



    <div class="tab-content" id="myTabContent">
		<?php echo $divTab?>

		<div class="tab-pane fade" id="newChapter" role="tabpanel" aria-labelledby="newChapter-tab">
			<form method="post" action="admin/addChapter">
			<div>
				<label for="title">Titre</label><br />
				<input type="text" id="title" name="title" />
			</div>

			<div>
				<textarea class="myeditablediv" name="mytextarea">  </textarea>
			</div>

			<div>
				<input type="submit" />
			</div>
			</form>
		</div>
    </div>

</div>
  <div class="tab-pane fade" id="commentaries" role="tabpanel" aria-labelledby="commentaries-tab">Commentaires</div>
</div>






<!--<ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php 
        $divTab ='';
        $divCom =''
    ?>


    <?php foreach($articles as $article): ?>

        <li class="nav-item" role="presentation">
            <a class="nav-link" id=<?= str_replace(" ", "", $article['title']). "-tab"?> data-bs-toggle="tab" href=<?= "#". str_replace(" ", "", $article['title']);?> role="tab" aria-controls=<?= str_replace(" ", "", $article['title']);?> aria-selected="true"><?=$article['title']?></a>
        </li>

        

        <?php foreach($comments as $comment):
            if($comment['post_id'] == $article['id']){
                //$divCom = $divCom .'<div>' .$comment["comment"].'</div>';
                $divCom = $divCom .'<p class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>' .$comment["comment"].'</p>';
                }?>
        <?php endforeach; ?>

        <?php $divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>' .$article["content"].'</div>'
        ?>

        

        
        
    <?php endforeach; ?>

	<li class="nav-item" role="presentation">
    	<a class="nav-link" id="newChapter-tab" data-bs-toggle="tab" href="#newChapter" role="tab" aria-controls="contact" aria-selected="false">Créer un nouveau chapitre</a>
  	</li>
 </ul>



    <div class="tab-content" id="myTabContent">
	<?php echo $divTab?>

	<div class="tab-pane fade" id="newChapter" role="tabpanel" aria-labelledby="newChapter-tab"> <form method="post" action="admin/addChapter">
      <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
      </div>

      <div>
        <textarea id="mytextarea" name="mytextarea"> </textarea>
      </div>

      <div>
        <input type="submit" />
      </div>
  </form></div>
    </div>
-->


 
    





















