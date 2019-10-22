<?php $this->titre = "Jean Forteroche"; ?>

		<div id= slide>
			<figure>
            <img src="Images/slide.jpg" alt="Slide"/>
				<figcaption>                
                <h2 id="titre">Billet simple pour l'Alaska</h2>
				</figcaption>
			</figure> 
		</div>


<?php foreach ($threeBillets as $billet):
    ?>
    <article class="ellipsis">
        <header>
            <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
            </a>
            <time><?= $this->nettoyer($billet['date']) ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>