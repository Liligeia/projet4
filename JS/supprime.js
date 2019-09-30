/**
 * Permet d'afficher un confirm 
 * @returns {Form}
 * @constructor
 */
var Supprime = function () {

    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;
	
	_self.init = function(){
		
        var subSupp = document.getElementsByClassName("delete");
		for (var i = 0; i < subSupp.length; i++){
			subSupp[i].addEventListener('click',  _self.supprimer);
		};
    };
	
	
    _self.supprimer = function(){
			if (confirm("Souhaîtez-vous supprimer ?")) {
				document.getElementById(this.name).submit();
			};
    };	
	


    return _self;

};



