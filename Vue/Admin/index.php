<?php $this->titre = "Administration" ?>

<h2>Administration</h2>

Bienvenue, <?= $this->nettoyer($login) ?> !
Ce blog comporte <?= $this->nettoyer($nbBillets) ?> billet(s) et <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
<br>


<h4> Créer un nouveau chapitre :</h4>

  <form id="formChap" method="post" action="admin/publier>
	<input type="text" id="titleChapter" name="titre" placeholder="Titre du chapitre"/>
    <textarea id="mytextarea" name="contenu"></textarea>
	<input type="submit" id="submitChap" value="Publier"/>
  </form>
  
<h4>Modifier un chapitre :</h4>

<h4>"NOMBRE" commentaire(s) signalé(s) :</h4>  


<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>