

 <!-- retirer le style de la balise p -->
<p style="padding-top: 200px;">

<style>
.dark-mode {
  background-color: black;
  color: white;
}
</style>


<button class="btn btn-dark" onclick="toggleDark()">Activer/Désactiver le mode sombre</button>

<script>
function toggleDark() {
	let content = document.getElementById('content');
	let cardAdmin = document.getElementById('cardAdmin');
	
	let element = document.body;
	element.classList.toggle("dark-mode");
	content.classList.toggle("dark-mode");
	cardAdmin.classList.toggle("dark-mode");
}
</script>





<div id="helloUser">Bonjour <?= $_SESSION["userName"] ?></div>

  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Modifier mon profil
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body" id="cardAdmin">
  <div class="container-xl" id="adminProfile">Profil
		<div>Modifier votre nom : <?= $_SESSION["userName"] ?>
		<form action="../admin/modifyProfile" method="post" name="changeNameForm" class="default-form">
			<div class="form-group">
				<label for="changeName">Nom</label>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="hidden" name="modifyType" value="modifyName" />
				<input type="text" name="newName" class="form-control" id="changeName" placeholder="Votre nom actuel est : <?= $_SESSION["userName"] ?>" required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Valider</button>
		</form>

		<div>Modifier votre email : <?= $_SESSION["userEmail"] ?>
		<form action="../admin/modifyProfile" method="post" name="changeEmailForm" class="default-form">
			<div class="form-group">
				<label for="changeEmail">Email</label>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="hidden" name="modifyType" value="modifyEmail" />
				<input type="email" name="newEmail" class="form-control" id="changeEmail" placeholder="Votre email actuel est : <?= $_SESSION["userEmail"] ?>" required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Valider</button>
		</form>


		<div>Modifier votre mot de passe
		<form action="../admin/modifyProfile" method="post" name="changePwdForm" class="default-form">
			<div class="form-group">
				<label for="changePwd">Mot de passe</label>
				<div id="errorMsgPwd">Attention vos mots de passe ne correspondent pas.</div>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="hidden" name="modifyType" value="modifyPwd" />
				<input type="password" name="newPwd" class="form-control" id="changePwd" placeholder="Entrer votre mot de passe..." required>
				<input type="password" class="form-control" id="confirm_password" placeholder="Confirmer votre mot de passe..." required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Valider</button>
		</form>

		<script>
//A déplacer
			//Compare password input when user change it:
			let password = document.getElementById("changePwd")
			, confirm_password = document.getElementById("confirm_password")
			, errorMsgPwd = document.getElementById("errorMsgPwd");

			function validatePassword(){
			if(changePwd.value != confirm_password.value) {
				confirm_password.setCustomValidity("Les mots de passe ne sont pas identiques.");
				errorMsgPwd.style.display = "block";
			} else {
				confirm_password.setCustomValidity('');
				errorMsgPwd.style.display = "none";
			}
			}

			changePwd.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>


		<div>Modifier la partie "A propos"
		<form action="../admin/modifyProfile" method="post" name="changeAboutForm" class="default-form">
			<div class="form-group">
				<label for="changeAbout">A propos</label>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="hidden" name="modifyType" value="modifyAbout" />
				<textarea class="myeditablediv form-control" id="changeAbout" name="newAbout" required><?= $_SESSION["about"] ?></textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Valider</button>
		</form>


		<div>Modifier vos coordonnées de contact
		<form action="../admin/modifyProfile" method="post" name="changeNameForm" class="default-form">
			<div class="form-group">
				<label for="changeTwitter">Twitter</label>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="hidden" name="modifyType" value="modifyContact" />
				<input type="text" name="newTwitter" class="form-control" id="changeTwitter" placeholder="Entrer votre twitter..." required>

				<label for="changeFacebook">Facebook</label>
				<input type="text" name="newFacebook" class="form-control" id="changeFacebook" placeholder="Entrer votre Facebook..." required>

				<label for="changePhone">Phone</label>
				<input type="tel" name="newPhone" class="form-control" id="changePhone" placeholder="Entrer votre téléphone..." required>

				<label for="changeAdress">Adress</label>
				<input type="text" name="newAdress" class="form-control" id="changeAdress" placeholder="Entrer votre adresse..." required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Valider</button>
		</form>













		<form method="post" action="../admin/modifyName" class="form1">
			<div>
				<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
				<input type="submit" value="Valider"/>
			</div>
		</form>

			<form method="post" action="../admin/modifyName" class="form1">
			<!-- Email input -->
				<div class="form-outline mb-4">
					<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
					<input type="text" id="form1name" class="form-control" >
					<label class="form-label" for="form1name" style="margin-left: 0px;">Prénom et nom</label>
					<div class="form-notch">
						<div class="form-notch-leading" style="width: 9px;"></div>
						<div class="form-notch-middle" style="width: 100px;"></div>
						<div class="form-notch-trailing"></div>
					</div>
					<form method="post" action="../admin/modifyName">
                                <div>
                                    <input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
                                    <input type="submit" onclick="return confirm('Attention vous vous apprêtez à changer votre nom. Continuer ?');" value="Valider"/>
                                </div>
                            </form>
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
				<a class="nav-link active" id="newChapter-tab" data-bs-toggle="tab" href="#newChapter" role="tab" aria-controls="contact" aria-selected="false">Créer un nouveau chapitre</a>
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









