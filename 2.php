<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Portfolio Luidjy Aubel</title>

  <meta name="author" content="Luidjy Aubel">
  <meta name="description" content="Ceci est mon premier projet en HTML">


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="test.css">
</head>

<body>
  <header>
    <div id="conteneur">
      <h1 id="header"><a href="#" title="Portfolio d'un étudiant en BTS sio"><span>Portfolio Luidjy Aubel</span></a>
      </h1>
      <nav>
        <ul id="menu">
          <li><a href="index6.html" title="Me contacter"><span>Contact</span></a></li>
          <li><a href="index5.html" title="Documentation technique"><span>Documentation</span></a></li>
          <li><a href="index4.html" title="Veille Technologie"><Span>Veille</Span></a></li>
          <li><a href="index3.html" title="Curiculum Vitae"><span>CV</span></a></li>
          <li><a href="index2.html" title="Mes Compétences"><span>Compétences</span></a></li>
          <li><a href="index.html" title="Accueil"><span>Accueil</span></a></li>
         
        </ul>
      </nav>
  </header>
  <main>
    <article>

     <div id="GoUp"><a href="#ancre1"><img src="rapide 10 gif fleche.gif" alt="Aller en Bas" /></a></div>
     
      <div id="contenu">
        <h2 align="center" id="ancre1">Formulaire</h2>
      </div>
<article>
<?php
  $nom = $_POST['nom'] ;
  $prenom = $_POST['prenom'] ;
  $probleme = $_POST['probleme'] ;
  $utility = $_POST['utility'] ;
  $nice = $_POST['nice'] ;
  $preci = $_POST['preci'] ;

  echo "<b> Votre Nom et votre Prenon :</b> $nom $prenom <br>";
  echo "<b> Le problème ce situe aux niveaux du :</b> $probleme <br>";
  echo "<b> Le Chipset/processeur de votre carte est de marque :</b> $nice <br>";
  foreach ($utility as $utility=>$value) {
             echo "<b> Votre utilisation est : </b>".$value."<br />";
        }
  echo "<b> Vos précisions sont :</b> $preci";
  echo "<br><br>";
  echo '<form action="1.php" > ';
 // echo '<input type=submit name="submit" value="Envoyer" >';
  echo '<input name="vhidden" type="hidden" value="$nom">';
  echo '</form>';
  echo '<button onclick="goBack()">Retour</button>
<script>
function goBack() {
  window.history.back();
}
</script>';
            // Ecrire dans un fichier

            $fichier = 'Données.txt';
	   file_put_contents($fichier, "Nom : ",FILE_APPEND) ;
	   file_put_contents($fichier, $nom,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Prenom : ",FILE_APPEND) ;
	   file_put_contents($fichier, $prenom,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Probleme : ",FILE_APPEND) ;
	   file_put_contents($fichier, $probleme,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Chipset : ",FILE_APPEND) ;
           file_put_contents($fichier, $nice,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "utilisation :",FILE_APPEND) ;
	   file_put_contents($fichier, $value,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Message : ",FILE_APPEND) ;
	   file_put_contents($fichier, $preci,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;

?>
      </div>
    </article>
  </main>
  <footer>
    <div id="ramitdown">
      <p id="footer"></p>
     <p id="footer">© Créer en HTML, design et code par luidjy Aubel</p>
  </div>
  </footer>
</body>
</html>