<div class="container-xl" id="adminMainContainer">

	<div class="container-xl" id="adminEditArticle">Editer un chapitre</div>

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
	<!--Chapters Tabs-->
	<div class="tab-pane fade show active" id="chapters" role="tabpanel" aria-labelledby="chapters-tab">
		<ul class="nav nav-tabs" id="myChapterTabs" role="tablist">
    	
			<?php $divTab ='';?>

			<?php foreach($articles as $article): ?>

				<li class="nav-item" role="presentation">
					<a class="nav-link" id=<?= str_replace(" ", "", $article['title']). "-tab"?> data-bs-toggle="tab" href=<?= "#". str_replace(" ", "", $article['title']);?> role="tab" aria-controls=<?= str_replace(" ", "", $article['title']);?> aria-selected="true"><?=$article['title']?></a>
				</li>


				<?php //$divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>' .$article["content"].'</div>'
				?>

				<?php 
				$divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>
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

		<div class="tab-content" id="chaptersTabContent">
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

	<!--Commentaries Tabs-->
	<div class="tab-pane fade" id="commentaries" role="tabpanel" aria-labelledby="commentaries-tab">
			
		<ul class="nav nav-tabs" id="myComsTab" role="tablist">

			<?php $divCom =''; $allComs= '';?>

			<?php foreach($comments as $comment): 
				$allComs = $allComs.
						'<tr>
							<th scope="row">'.$comment["post_id"].'</th>
							<td>'.$comment["name"].'</td>
							<td>'.$comment["comment"].'</td>
							<td>'.$comment["create_date"].'</td>
							<td>'.$comment["id"].'</td>
						</tr>';?>
			<?php endforeach; ?>
			
			<?php foreach($articles as $article):  ?>
				<?php $comList ='';?>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id=<?="Com-" .str_replace(" ", "", $article['title']). "-tab"?> data-bs-toggle="tab" href=<?= "#Com-". str_replace(" ", "", $article['title']);?> role="tab" aria-controls="Com-"<?= str_replace(" ", "", $article['title']);?> aria-selected="true">Commentaires<br> <?=$article['title']?></a>
				</li>

				<?php foreach($comments as $comment):
					if($comment['post_id'] == $article['id']){
						$comList = $comList. $comment["comment"];
						}?>
				<?php endforeach; ?>

				<?php $divCom = $divCom .'<div class="tab-pane fade" id="Com-' .str_replace(" ", "", $article["title"]). '" role="tabpanel" aria-labelledby="Com-' .str_replace(" ", "", $article["title"]). '-tab">' .$comList.'</div>';?>

			<?php endforeach; ?>

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="allCom-tab" data-bs-toggle="tab" href="#allCom" role="tab" aria-controls="contact" aria-selected="false">Voir tous les nouveaux commentaires</a>
			</li>
		</ul>

		<div class="tab-content" id="comsTabContent">
			<?php echo $divCom?>

			<div class="tab-pane fade" id="allCom" role="tabpanel" aria-labelledby="allCom-tab">
				<table class="table">
					<thead>
						<tr>
						<th scope="col">Chapitre</th>
						<th scope="col">Nom</th>
						<th scope="col">Commentaires</th>
						<th scope="col">Date</th>
						<th scope="col">Edition(Approuver, effacer, éditer)</th>
						</tr>
					</thead>
					<tbody>
						<?php echo $allComs?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>