/**
 * Permet d'afficher un confirm avant de sauvegarder un commentaire signalé
 * @returns {Form}
 * @constructor
 */
var Sauvegarde = function () {

    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;
	
	_self.init = function(){
		
        var subSave = document.getElementsByClassName("save");
		for (var i = 0; i < subSave.length; i++){
			subSave[i].addEventListener('click',  _self.sauvegarder);
			console.log("erreur sauvegarde event");
		};
    };
	
	
    _self.sauvegarder = function(){
			if (confirm("Souhaîtez-vous garder ce commentaire ?")) {
				document.getElementsByClassName(this.name.concat(" sauvegarde"))[0].submit();
			};
    };	
	


    return _self;

};



