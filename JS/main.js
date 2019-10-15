/**
 * Stock toutes les fonctions
 */
var context;
/**
 * Initialise Jquery
 */
jQuery(document).ready(function(){
    console.log("jQuery init ... ");
    context = new App();
    context.init();
});

/**
 * Initialise toutes fonctions et les exécutes progressivement
 * @returns {App}
 * @constructor
 */
var App = function(){
    /**
     * Evite de perdre le This dans l'instance en cours
     * quand on passe sur des callbacks
     * @type {Form}
     * @private
     */
    var _self = this;


    _self.confirme = null;
	_self.supprime = null;
	_self.supprimeCommentaire = null;
	_self.sauvegarde = null;
	_self.signalement = null;
	

    /**
     * Initialise et crée les fonctions
     */
    _self.init = function(){

        _self.confirme = new Confirme();
        _self.confirme.init();
		
		_self.supprime = new Supprime();
		_self.supprime.init();
		
		_self.supprimeCommentaire = new SupprimeCommentaire();
		_self.supprimeCommentaire.init();
		
		_self.sauvegarde = new Sauvegarde();
		_self.sauvegarde.init();
		
		_self.signalement = new Signalement();
		_self.signalement.init();

    };

    return _self;
};