


<p style="padding-top: 200px;">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Profile
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Profile
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="container-xl" id="adminProfile">Profil
		<div>Modifier votre nom
			<form method="post" action="" class="form1">
			<!-- Email input -->
				<div class="form-outline mb-4">
					<input type="text" id="form1name" class="form-control" >
					<label class="form-label" for="form1name" style="margin-left: 0px;">Prénom et nom</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 100px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
				</div>
			<!-- Submit button -->
				<button type="submit" class="btn btn-primary btn-block">Valider</button>
			</form>
		</div>
		<div>Modifier votre mot de passe
			<form method="post" action="" class="form1">
				<!-- Password input -->
				<div class="form-outline mb-4">
					<input type="password" id="form1pwd" class="form-control" />
					<label class="form-label" for="form1pwd">Mot de passe</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 88.8px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
				</div>
				<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
			</form>
		</div>
		<div>Modifier votre description
			<form method="post" action="" class="form1">
				<!-- about input -->
				<div class="form-outline mb-4">
					<input type="text" id="form1about" class="form-control" />
					<label class="form-label" for="form1about">Description</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 76px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
				</div>
				<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
			</form>
		</div>
		<div>Modifier votre email
			<form method="post" action="" class="form1">
				<!-- about input -->
				<div class="form-outline mb-4">
					<input type="email" id="form1email" class="form-control" />
					<label class="form-label" for="form1email">Email</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 38px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
				</div>
				<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
			</form>
		</div>
		<div>Modifier votre twitter
			<form method="post" action="" class="form1">
				<!-- about input -->
				<div class="form-outline mb-4">
					<input type="text" id="form1twitter" class="form-control" />
					<label class="form-label" for="form1twitter">Twitter</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 46px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
				</div>
				<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
			</form>
		</div>
	</div>
  </div>
</div>

<div class="container-xl" id="adminMainContainer">

	
</div>


<!--<form class="form1">
       
<div class="form-outline mb-4">
	<input type="email" id="form1Example1" class="form-control">
	<label class="form-label" for="form1Example1" style="margin-left: 0px;">Email address</label>
	<div class="form-notch">
		<div class="form-notch-leading" style="width: 9px;"></div>
		<div class="form-notch-middle" style="width: 88.8px;"></div>
		<div class="form-notch-trailing"></div>
	</div>
</div>

  
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" />
	<label class="form-label" for="form1Example2">Password</label>
	<div class="form-notch">
		<div class="form-notch-leading" style="width: 9px;"></div>
		<div class="form-notch-middle" style="width: 88.8px;"></div>
		<div class="form-notch-trailing"></div>
	</div>
  </div>

   
  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
-->


<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseChptCom" role="button" aria-expanded="false" aria-controls="collapseChptCom">
    Editer des chapitres et des commentaires
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChptCom" aria-expanded="false" aria-controls="collapseChptCom">
  Editer des chapitres et des commentaires
  </button>
</p>
<div class="collapse" id="collapseChptCom">
  <div class="card card-body">

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
  
  </div>
</div>









