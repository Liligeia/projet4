<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
/**
 * Contrôleur des actions d'administration
 */
class ControleurAdmin extends ControleurSecurise
{
	
	  private $billet;

  public function __construct() {
    $this->billet = new Billet();
  }

  // Affiche la liste de tous les billets du blog
  public function index() {
    $billets = $this->billet->getBillets();
    $this->genererVue(array('billets' => $billets));
  }
  
  public function supprimer(){
	$idBillet = $this->requete->getParametre("id");
	  
	$this->billet->supprimerBillet($idBillet);
	  
	$this->executerAction("index");
  }
	
	
}