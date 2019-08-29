<?php $this->titre = "Modifier"; ?>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
			<div>
				<div>
					<a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
						<h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
					</a>
				</div>
				<div>
					<input type="submit" value="Modifier"/>
					<input type="submit" value="Supprimer"/>
				</div>	
			</div>
        </header>
    </article>
    <hr />
<?php endforeach; ?>