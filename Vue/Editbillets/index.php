<?php $this->titre = "Modifier billet"; ?>

<h4> Modifier votre chapitre :</h4>

  <form id="formChap" method="post" action="editbillets/update">
	<input type="text" id="titleChapter" name="titre" placeholder="Titre du chapitre" value="<?= $this->nettoyer($billet['titre']) ?>"/>
    <textarea id="mytextarea" name="contenu"><?= $this->nettoyer($billet['contenu']) ?></textarea>
	<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
	<input type="submit" class="buttonsub" value="Modifier"/>
  </form>