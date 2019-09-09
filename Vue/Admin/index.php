<?php $this->titre = "Administration"; ?>

<h2>Administration</h2>

<div id="menuAdmin">
	<a href="admin" > <button type="button" class="buttonMenu">Article(s)</button></a>
	<a href="editcommentaires" > <button type="button" class="buttonMenu">Commentaire(s)</button></a>
</div>

<h3> Vos chapitres :</h3>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
			<div class="liste">
				<a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
					<h4 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h4>
				</a>
				<div id="editChap">
					<!--Modifier-->
					<a href="editbillets"><button type="button" class="buttonEdit"><i class="fas fa-pencil-alt"></i></button></a>
					<!--Supprimer-->
					<form method="post" action="admin/supprimer">
						<button type="button" class="buttonDelete"><i class="fas fa-times"></i></button>
					</form>	
				</div>
			</div>
        </header>
    </article>
    <hr />
<?php endforeach; ?>

<a href="newbillet" ><button type="button" class="buttonsub">+ Créer chapitre</button></a>