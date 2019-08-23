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
    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }
    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbBillets' => $nbBillets, 'nbCommentaires' => $nbCommentaires, 'login' => $login));
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