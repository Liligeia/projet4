<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
	<base href="<?= $racineWeb ?>" >
	<!--Stylesheet-->
    <link rel="stylesheet" href="Contenu/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--TinyMCE-->
	<script src="https://cdn.tiny.cloud/1/qd53a38o7acwmk9l0fwazlqtmml29z2e980gpr4j31s7q0hv/tinymce/5/tinymce.min.js"></script> 
	<script type="text/javascript">
		tinymce.init({
		selector: '#mytextarea',
		valid_elements : "em/i,strike,u,strong/b,div[align],br",
		
		});
	</script>
    <title><?= $titre ?></title>
  </head>
  
  <body>
    <div id="global">
	
	<!-- Header -->
      <header>
		<!--Titre-->
        <a href="index.php"><h1 id="titreBlog">Jean Forteroche</h1></a>
		<!-- Menu -->
		<nav id="menu">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="Chapitres">Chapitres</a></li>
            </ul>
        </nav>
      </header>
	  
	<!-- Contenu -->
      <div id="contenu">
        <?= $contenu ?>
      </div>
	  
	<!-- Footer -->
      <footer id="piedBlog">
        <ul id="socialmedia">
			<li><a class="socialicons" href= "https//www.facebook.com"><i class="icon-social-facebook"></i></a></li>
			<li><a class="socialicons" href= "https//www.twitter.com"><i class="icon-social-twitter"></i></a></li>
			<li><a class="socialicons" href= "https//www.instagram.com"><i class="icon-social-instagram"></i></a></li>
		</ul>
		<a id="connexion" href="connexion">Connexion</a>
		<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
      </footer>
    </div>
	
	
<!-- SCRIPT -->
            
    <!--jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
	<!-- JavaScript -->
    <script src="JS/main.js"></script>
    <script src="JS/confirme.js"></script>
	<script src="JS/supprime.js"></script>
	<script src="JS/supprimeCommentaire.js"></script>
	<script src="JS/sauvegarde.js"></script>
	<script src="JS/signalement.js"></script>
	
	
  </body>
</html>