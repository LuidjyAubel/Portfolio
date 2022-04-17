<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Flux RSS | Cloud computing</title>
        <meta name="author" content="Luidjy Aubel">
  <meta name="description" content="Flux RSS Cloud Computing, orienté programmation">
  <meta name ="robots" content ="noindex, follow">
  <meta name=" copyright" content="Luidjy Aubel"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="test.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <header class="header">
    <div id="conteneur">
      <h1 id="header" class="test"><a href="#" title="Portfolio d'un étudiant en BTS sio"><span>Portfolio Luidjy Aubel</span></a>
      </h1>
      <h1 id="responT"><a href="#" title="Portfolio d'un étudiant en BTS sio"><span>Portfolio</span></a></h1>
      <nav>
        <div id="responM">
          <a href="index.html" title="Accueil"><span>Accueil</span></a>
          <a href="index2.html" title="Mes Compétences"><span>Skills</span></a>
          <a href="index3.html" title="Curiculum Vitae"><span>CV</span></a>
          <a href="index4.html" title="Veille Technologie"><Span>Veille</Span></a>
          <a href="index5.html" title="Mes projets"><span>Projets</span></a>
          <a href="index6.html" title="Me contacter"><span>Contact</span></a>
        </div>
        <ul id="menu">
          <li><a href="index6.html" title="Me contacter"><span>Contact</span></a></li>
          <li><a href="index5.html" title="Mes projets"><span>Projets</span></a></li>
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
	    <div id='contenu'><h2 align='center' id='ancre1'>Flux RSS Cloud computing</h2></div>
        <div class="content">

            <!--<form method="post" action="">
                <input type="text" name="feedurl" placeholder="Enter website feed URL">&nbsp;<input type="submit" value="Submit" name="submit">
            </form>-->
    <?php

        $url = "http://cloud-computing.developpez.com/index/rss";

        $invalidurl = false;
        if(@simplexml_load_file($url)){
            $feeds = simplexml_load_file($url);
        }else{
            $invalidurl = true;
            echo "<h2>URL invalide.</h2>";
        }


        $i=0;
        if(!empty($feeds)){


            $site = $feeds->channel->title;
            $sitelink = $feeds->channel->link;

            foreach ($feeds->channel->item as $item) {

                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $postDate = $item->pubDate;
                $pubDate = date('D, d M Y',strtotime($postDate));


                if($i>=15) break;
        ?>
		<center>
                <div class="compprog">
                    <div class="post-head">
                        <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <span><?php echo $pubDate; ?></span>
                    </div>
                    <div class="post-content">
                        <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Read more</a>
                    </div>
                </div>
		</center>
                <?php
                $i++;
            }
        }else{
            if(!$invalidurl){
                echo "<h2>No item found</h2>";
            }
        }
    ?>
        </div>
        <footer>
        <div id="ramitdown">
            <p id="footer"></p>
            <a id="footer" href="legale.html">Mentions légales</a>
           <p id="footer">© Créer en HTML, design et code par luidjy Aubel</p></div>
    </footer>
    </body>
</html>

