/**
 * Permet d'afficher un confirm avant de supprimer un commentaire
 * @returns {Form}
 * @constructor
 */
var SupprimeCommentaire = function () {

    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;
	
	_self.init = function(){
		
        var subSupp = document.getElementsByClassName("deleteCom");
		for (var i = 0; i < subSupp.length; i++){
			subSupp[i].addEventListener('click',  _self.supprimerCommentaire);
			console.log("erreur supprimer event");
		};
    };
	
	
    _self.supprimerCommentaire = function(){
			if (confirm("Souhaîtez-vous supprimer ce commentaire ?")) {
				document.getElementsByClassName(this.name.concat(" supprimeCom"))[0].submit();
			};
    };	
	


    return _self;

};



