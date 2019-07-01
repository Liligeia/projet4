<?php $this->titre = "Jean Forteroche" . $this->nettoyer($billet['titre']); ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
        <time><?= $this->nettoyer($billet['date']) ?></time>
    </header>
    <p><?= $this->nettoyer($billet['contenu']) ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Commentaires</h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $this->nettoyer($commentaire['auteur']) ?> dit :</p>
    <p><?= $this->nettoyer($commentaire['contenu']) ?></p>
<?php endforeach; ?>
<hr />
<form id="formCom" method="post" action="billet/commenter">
    <input id="auteur" name="auteur" type="text" maxlength="20" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              maxlength="280" placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input id="submitCom" type="submit" value="Commenter" />
</form>