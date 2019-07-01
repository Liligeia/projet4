<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
	<base href="<?= $racineWeb ?>" >
    <link rel="stylesheet" href="Contenu/style.css" />
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
                <li><a href="#">Chapitres</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
		<!-- Slide -->
		<div id= slide>
			<figure>
            <img src="Images/slide.jpg" alt="Slide"/>
				<figcaption>                
                <h2>Billet simple pour l'Alaska</h2>
				</figcaption>
			</figure> 
		</div>
      </header>
	  
	<!-- Chapitres -->
      <div id="contenu">
        <?= $contenu ?>
      </div>
	  
	<!-- Footer -->
      <footer id="piedBlog">
        <div id="socialmedia">
		</div>
		<div id="connexion">
		</div>
      </footer>
    </div>
  </body>
</html>