<?php
require_once 'Framework/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 */
class Billet extends Modele {
    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
	
	public function getThreeBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc'
				. ' limit 3';
        $threeBillets = $this->executerRequete($sql);
        return $threeBillets;
    }
    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
	
	/* Ajoute un billet dans la BD*/
	public function ajouterBillet($titre, $contenu) {
		$sql = 'insert into T_BILLET (BIL_DATE, BIL_TITRE, BIL_CONTENU)'
			.'values(?, ?, ?)';
		$date = date('Y-m-d H:i:s');
		$this->executerRequete($sql, array($date, $titre, $contenu));
		
	}
	/*Supprime un billet dans la BD*/
	public function supprimerBillet($idBillet){
		$sql = 'delete from T_BILLET where BIL_ID=?';
		$this->executerRequete($sql, array($idBillet));
	}
	
	/*Update un billet dans la BD*/
	public function updateBillet($titre, $contenu, $idBillet){
		$sql = ' update T_BILLET'
				.' set BIL_TITRE=?, BIL_CONTENU=?'
				.' where BIL_ID=?';
		$this->executerRequete($sql, array($titre, $contenu, $idBillet));		
	}
	
    /**
     * Renvoie le nombre total de billets
     * 
     * @return int Le nombre de billets
     */
    public function getNombreBillets()
    {
        $sql = 'select count(*) as nbBillets from T_BILLET';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }
}