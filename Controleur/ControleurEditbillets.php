<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
/**
 * Contrôleur des actions d'administration
 */
class ControleurEditbillets extends ControleurSecurise
{
	
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
	$idBillet = $this->requete->getParametre("id");
        
    $billet = $this->billet->getBillet($idBillet);
	
    $this->genererVue(array('billet' => $billet));
    }
	
	//Modifie un billet et renvoi vers l'admin
	public function update(){
		$titre = $this->requete->getParametre("titre");
		$contenu = $this->requete->getParametre("contenu");
		$idBillet = $this->requete->getParametre("id");
	  
		$this->billet->updateBillet($titre, $contenu, $idBillet);
	  
		$this->rediriger("admin");
		
	}

}