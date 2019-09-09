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
    $billets = $this->billet->getBillets();
    $this->genererVue(array('billets' => $billets));
    }
	
}