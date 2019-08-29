<?php

require_once 'ControleurSecurise.php';;
require_once 'Modele/Billet.php';

class ControleurModifier extends ControleurSecurise {

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
	  $sql = "DELE"
  }
  
  /*
		CLICK 'suprimer'
		SELECTIONER id du billet
		SUPPRIMER Le billet dans la BDD
  */
  
}