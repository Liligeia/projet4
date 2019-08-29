<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Utilisateur.php';
/**
 * Contrôleur gérant la connexion au site
 *
 */
class ControleurConnexion extends Controleur
{
    private $utilisateur;
    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
    }
    public function index()
    {
        $this->genererVue();
    }
    
	//Vérifie le mot de passe hashé dans la BDD avec le password_verify
	public function verify($login, $mdp){
		$contenuRequete = $this->utilisateur->getUserPassword($login);
		$resultat = false;
			if ($contenuRequete && password_verify($mdp,$contenuRequete['UTIL_MDP'])){
			
			$resultat = true;
			}else{
			$resulat = false;
			}
		return $resultat;

    }	
	
	//Vérifie les identifiants rentrer par l'utilisateur pour se connecter 
	public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
				if ($this->verify($login, $mdp)) {
					$this->utilisateur->setLogin($login);
					
					$this->requete->getSession()->setAttribut("login",
							$login);
					$this->rediriger("admin");
				
				}	
				else{
				$this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects'),
				"index");
				}
			
        }
        else{
            throw new Exception("Action impossible : login ou mot de passe non défini");
		}	
    }
    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }
}