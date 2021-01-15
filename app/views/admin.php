<div class="adminMainContainer">

	<!--Hello user-->
	<div class="container-lg" id="helloUser">
		<h1>Bonjour <?= $_SESSION["userName"] ?></h1>
		<p>Bienvenue sur votre espace d'administration.</p>
		<div class="container darkModContainer">
			<div><i class="bi bi-sun"></i></div>
			<label class="switch">
				<input type="checkbox" id="darkModBtn" onclick="toggleDark()">
				<span class="slider round"></span>
			</label>
			<div><i class="bi bi-moon"></i></div>
		</div>
	</div> <!--closing helloUser-->








	<!--Place to edit and check all chapters and commentaries-->
	<div class="container-lg" id="editContainer">

		<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseChptCom" role="button" aria-expanded="false" aria-controls="collapseChptCom">
			Editer des chapitres et des commentaires
		</a>

		<div class="collapse" id="collapseChptCom">
			<div class="card card-body" id="cardEditChptAndCom">
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
									<?php //$divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>' .$article["content"].'</div>'?>
								<?php 
								$divTab = $divTab .'<div class="tab-pane fade" id=' .str_replace(" ", "", $article["title"]). ' role="tabpanel" aria-labelledby=' .str_replace(" ", "", $article["title"]). '-tab>
									<form method="post" action="admin/editChapter">
										<div class="editionTitle">
											<label for="title">Titre</label><br />
											<input type="text" id="title" name="title" value="Chapitre '.$article["id"].'" >
										</div>

										<div class="editionTextArea">
											<textarea class="myeditablediv" name="mytextarea">'.$article["content"].' </textarea>
										</div>

										<div class="editionButton">
											<input type="hidden" name="chapterID" value="'.$article["id"].'" />
											<input class="btn btn-secondary" type="submit" />
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

							<div class="tab-pane fade active show" id="newChapter" role="tabpanel" aria-labelledby="newChapter-tab">
								<form method="post" action="admin/addChapter">
									<div class="editionTitle">
										<label for="title">Titre</label><br />
										<input type="text" id="title" name="title" />
									</div>

									<div class="editionTextArea">
										<textarea class="myeditablediv" name="mytextarea">  </textarea>
									</div>

									<div class="editionButton">
										<input class="btn btn-secondary" type="submit" />
									</div>
								</form>
							</div> 
						</div>

					</div> <!--Closing chapters-->



					<!--Commentaries Tabs-->
					<div class="tab-pane fade" id="commentaries" role="tabpanel" aria-labelledby="commentaries-tab">	
						<ul class="nav nav-tabs" id="myComsTab" role="tablist">
							<?php 
							$divCom ='';
							$allComs= '';
							?>

							<?php foreach($flagedComments as $flagedComment):
								$allComs = $allComs.
										'<tr>
											<th scope="row">'.$flagedComment["post_id"].'</th>
											<td>'.$flagedComment["name"].'</td>
											<td>'.$flagedComment["comment"].'</td>
											<td>'.$flagedComment["create_date"].'</td>
											<td>
												<form method="post" action="../admin/removeflag">
													<div>
														<input type="hidden" name="id" value="'.$flagedComment["id"].'" />
														<input type="hidden" name="post_id" value="'.$flagedComment["post_id"].'" />
														<input type="submit" id="validFlagComment" name="valid" value="Valider ce commentaire"/>
														<input type="submit" id="deleteFlagComment" name="delete" value="Supprimer ce commentaire"/>
													</div>
												</form>
											</td>
										</tr>';?>
							<?php endforeach; ?>
							
							<?php foreach($articles as $article):  ?>
								<?php $comList ='';?>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id=<?="Com-" .str_replace(" ", "", $article['title']). "-tab"?> data-bs-toggle="tab" href=<?= "#Com-". str_replace(" ", "", $article['title']);?> role="tab" aria-controls="Com-"<?= str_replace(" ", "", $article['title']);?> aria-selected="true">Commentaires<br> ch. <?=$article['id']?></a>
								</li>

								<?php foreach($comments as $comment):
									if($comment['post_id'] == $article['id']){
										$comList = $comList. $comment["comment"];
										}?>
								<?php endforeach; ?>

								<?php $divCom = $divCom .'<div class="tab-pane fade" id="Com-' .str_replace(" ", "", $article["title"]). '" role="tabpanel" aria-labelledby="Com-' .str_replace(" ", "", $article["title"]). '-tab">' .$comList.'</div>';?>

							<?php endforeach; ?>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="allCom-tab" data-bs-toggle="tab" href="#allCom" role="tab" aria-controls="contact" aria-selected="false">Commentaires<br> signalés</a>
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
										<th scope="col">Edition(Approuver, supprimer)</th>
										</tr>
									</thead>
									<tbody>
										<?php echo $allComs?>
									</tbody>
								</table>
							</div>
						</div>

					</div><!--closing commentaries-->
				</div><!--closing myUpperTabContent-->
			</div><!--closing cardEditChptAndCom-->
		</div><!--closing collapseChptCom-->
	</div> <!--closing editContainer-->




	<!--Profile-->
	<div class="container-lg" id="profileContainer">

		<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseProfile" role="button" aria-expanded="false" aria-controls="collapseProfile">
		Modifier mon profil
		</a>

		<div class="collapse" id="collapseProfile">
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
					</div>

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
					</div>

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
					</div>

						<!--A déplacer-->
						<script>
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
						<form action="../admin/modifyProfile" method="post" name="changeAboutForm" class="default-form about-form">
							<div class="form-group">
								<label for="changeAbout">A propos</label>
								<input type="hidden" name="id" value="<?= $_SESSION["userID"] ?>" />
								<input type="hidden" name="modifyType" value="modifyAbout" />
								<textarea class="myeditablediv form-control" id="changeAbout" name="newAbout" required><?= $_SESSION["about"] ?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Valider</button>
						</form>
					</div>


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
					</div>
				</div> <!--closing adminProfile-->
			</div> <!--closing cardAdmin-->
			<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseProfile" role="button" aria-expanded="false" aria-controls="collapseProfile">
				Fermer mon profil
			</a>
		</div> <!--closing collapseProfile-->
	</div> <!--closing profileContainer-->
</div> <!--closing adminMainContainer-->