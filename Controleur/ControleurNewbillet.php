<?php

require_once 'ControleurSecurise.php';;
require_once 'Modele/Billet.php';

class ControleurNewbillet extends ControleurSecurise {


    private $billet;

	
    /**
     * Constructeur 
	*/
    public function __construct()
    {
        $this->billet = new Billet();
    }
    public function index()
    {
    $billets = $this->billet->getBillets();
    $this->genererVue(array('billets' => $billets));
    }
	
	//Ajoute un chapitre dans la liste des billets
	public function publier() 
	{
	  $titre = $this->requete->getParametre("titre");
	  $contenu = $this->requete->getParametre("contenu");
	  
	  $this->billet->ajouterBillet($titre, $contenu);
	  
	  // Exécution de l'action par défaut pour actualiser la liste des billets
	  $this->executerAction("index");
    }	

}