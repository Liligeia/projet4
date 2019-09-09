<?php $this->titre = "Nouveau Billet"; ?>


<h4> Créer un nouveau chapitre :</h4>

  <form id="formChap" method="post" action="newbillet/publier">
	<input type="text" id="titleChapter" name="titre" placeholder="Titre du chapitre"/>
    <textarea id="mytextarea" name="contenu"></textarea>
	<input type="submit" class="buttonsub" value="Publier"/>
  </form>