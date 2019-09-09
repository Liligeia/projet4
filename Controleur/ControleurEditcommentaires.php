<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Commentaire.php';
/**
 * Contrôleur des actions d'administration
 */
class ControleurEditcommentaires extends ControleurSecurise
{
	
	  private $commentaire;

  public function __construct() {
    $this->commentaire = new Commentaire();
  }

  // Affiche la liste de tous les commentaires du blog
  public function index() {
    $commentaires = $this->commentaire->getListCommentaires();
    $this->genererVue(array('commentaires' => $commentaires));
  }
  
  public function supprimer(){
	$idCommentaire = $this->requete->getParametre("id");
	  
	$this->commentaire->supprimerCommentaire($idCommentaire);
	  
	$this->executerAction("index");
  }
	
}