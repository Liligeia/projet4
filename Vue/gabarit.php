<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
	<base href="<?= $racineWeb ?>" >
    <link rel="stylesheet" href="Contenu/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	<script src="https://cdn.tiny.cloud/1/qd53a38o7acwmk9l0fwazlqtmml29z2e980gpr4j31s7q0hv/tinymce/5/tinymce.min.js"></script> 
	<script>tinymce.init({ selector: #mytextarea });</script>
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
                <li><a href="#">Contact</a></li>
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
		<div id="connexion">
		<a href="connexion">Connexion</a>
		</div>
      </footer>
    </div>
  </body>
</html>