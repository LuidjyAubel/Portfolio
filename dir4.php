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
      <?php
      session_start();
$curdir = getcwd().'\\';
if (count($_SESSION) == 0 )$_SESSION['curdir'] = getcwd().'\\';
if (count($_GET)== 0 ) $_SESSION['curdir']= getcwd().'\\';
  else
  { $curdir = $_SESSION['curdir'] ;  // répertoire courant
	$newdir = $_GET['newdir'] ;  // répertoire cible
	
	if( $newdir == '.' )  $curdir = $curdir;   // ne rien faire
	else if( $newdir == '..' )
		  $curdir = dirname($curdir)  . '\\' ;  // remonter 
	else  $curdir = $curdir . $newdir . '\\' ;  // descendre
  }
  $_SESSION['curdir'] = $curdir;
 
  echo "<center>DIR = $curdir</center><br>";
  
  $files1 = scandir($curdir);

  echo"<table cellspacing=0 border=1 align='center'>\n";
  echo"<tr><th><a href='?curdir=$curdir&newdir=..' title='Retour à la racine'><img height=15 src='3.png'></a> </td></th>";
  echo"<th> Nom </th><th colspan='3'> options </th</tr>\n";
  

  foreach ($files1 as $key => $value)
  {
    if (  is_dir($curdir.$value) ){
		if ($value == ".") continue;
		if ($value == "..") continue;
		echo "<tr>";
		echo "<td> <a href='?curdir=$curdir&newdir=$value'><img height=15 src='dir.png'></a> </td>";
		 echo "<td>". $value . "</td>" ;
         echo "<td> <button><a href='?curdir=$curdir&newdir=$value'>Ouvrir</a></button> </td> ";
         echo "<td> </td>" ;
		echo "<td> <button> <a href='Supprimer.php?fich=".$value."'>Supprimer</a> </button> </td>";
		echo "</tr>\n";}
  }
    foreach ($files1 as $key => $value)
  {
	   if ( ! is_dir($curdir.$value) ){
		echo "<tr>";
		echo "<td> <a href='?curdir=$curdir&newdir=$value'><img height=15 src='2.png'></a> </td>";
		echo "<td>". $value . "</td>" ;
		echo "<td> </td>" ;
    echo "<td> <button> <a href='$value' download=".$value.">Télécharger</a> </button> </td>";
    echo "<td> <button> <a href='Supprimer.php?fich=".$value."'>Supprimer</a> </button> </td>";
		echo "</tr>\n";}
  }
  
  echo "</table>\n";
 
?>
<br>
<center><a href='?'>Racine</a></center>
</article>
  </main>
  <footer>
    <div id="ramitdown">
      <p id="footer"></p>
      <a id="footer" href="legale.html">Mentions légales</a>
     <p id="footer">© Créer en HTML, design et code par luidjy Aubel</p>
  </div>
  </footer>

</body>

</html>