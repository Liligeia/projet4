<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
/**
 * Contrôleur des actions d'administration
 */
class ControleurAdmin extends ControleurSecurise
{
	
	  private $billet;
	  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
	$this->commentaire = new Commentaire();
  }

  // Affiche la liste de tous les billets du blog
  public function index() {
    $billets = $this->billet->getBillets();
    $this->genererVue(array('billets' => $billets));
  }
  
  
  
  //Supprime le billet avec les commentaires qui y sont attachés
  public function supprimer(){
	$idBillet = $this->requete->getParametre("id");
	  
	$this->billet->supprimerBillet($idBillet);
	$this->commentaire->supprimerCommentairesBillet($idBillet);
	  
	$this->executerAction("index");
  }
	
	
}