<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Veille technologique</title>
        <meta name="author" content="Luidjy Aubel">
  <meta name="description" content="Veille technologique sur le cloud Computing">
  <meta name ="robots" content ="noindex, follow">
  <meta name=" copyright" content="Luidjy Aubel"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="shortcut icon" href="../Assets/Pictures/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="../Assets/Style/main.css">
        <link rel="stylesheet" href="../Assets/Style/feed-content.css">
        <link rel="stylesheet" href="../Assets/Style/Responsive.css">
        <link rel="stylesheet" href="../Assets/Style/veille-responsive.css">
    </head>
    <body>
    <header>
    <h1><a href="index.html" id="site_title" title="Portfolio d'un étudiant en LP Miar">Portfolio Luidjy Aubel</a>
    </h1>
    <nav>
      <div>
        <a href="../index.html" title="Accueil"><span>Accueil</span></a>
        <a href="competence.html" title="Mes Compétences"><span>Competence</span></a>
        <a href="CV.html" title="Curiculum Vitae"><span>CV</span></a>
        <a href="feed.php" title="Veille Technologie"><Span>Veille</Span></a>
        <a href="Projet.html" title="Mes projets"><span>Projets</span></a>
        <a href="contact.html" title="Me contacter"><span>Contact</span></a>
      </div>
    </nav>
</header>
    <main>
        <article>
        <div id="btn-down">
              <a href="#title"><img src="../Assets/Pictures/rapide 10 gif fleche.gif" alt="Aller en Bas" /></a>
            </div>
            <div class="title">
                <h2 id="title">Veille cloud computing</h2>
            </div>
        <div class="container">
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
                setlocale(LC_TIME, 'fr_FR');
                date_default_timezone_set('Europe/Paris');
                $pubDate = date('d m Y', strtotime($postDate));


                if($i>=15) break;
        ?>
                <div class="card">
                        <h2 class="card-title"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <p><span><?php echo $pubDate; ?></span></p>
                        <?php echo "<p>".implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>"> Read more</a></p>
                </div>
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
        <div id="github"><a target="_blank" href="https://github.com/LuidjyAubel"><img src="../Assets/Pictures/25231.png" alt="compte github" /></a></div>
        </article>
        <div class="footer">
      <a href="legale.html">Mentions légales</a>
      <p>© Créé en HTML, design et code par luidjy Aubel</p>
    </div>
    </body>
</html>

