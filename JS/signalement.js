/**
 * Permet d'afficher un confirm 
 * @returns {Form}
 * @constructor
 */
var Signalement = function () {

    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;
	
	_self.init = function(){
		
        var signal = document.getElementsByClassName("signal");
		for (var i = 0; i < signal.length; i++){
			signal[i].addEventListener('click',  _self.signaler);
		};
    };
	
	
    _self.signaler = function(){
			if (confirm("Souhaitez vous signaler ce commentaire ?")) {
				document.getElementsByClassName(this.name.concat(" signaler"))[0].submit();
			};
    };	
	


    return _self;

};



