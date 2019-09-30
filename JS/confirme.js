/**
 * Permet d'afficher un confirm 
 * @returns {Form}
 * @constructor
 */
var Confirme = function () {

    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;
	
	_self.init = function(){
		
        var subConf = document.getElementsByClassName("confirm");
		for (var i = 0; i < subConf.length; i++){
			subConf[i].addEventListener('click',  _self.confirmer);
		};
    };
	
	
    _self.confirmer = function(){
			if (confirm("Souhaîtez-vous confirmer ?")) {
				formConf.submit();
			};
    };	
	


    return _self;

};



