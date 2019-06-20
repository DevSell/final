<?php
require('global.php');
?>

<body>
   <div class="site-middle">
        <div class="layout-fixed"> 
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div class="page-single page-layout">
                        
                        <article class="page hentry">
                            
                            <header class="entry-header">
                                <h1 class="entry-title">derniers articles</h1>
                            </header>
                            
                            <div class="entry-content">
                                
                                <div class="latest-posts media-grid masonry" data-layout="masonry" data-item-width="340">
                            
                                        <?php
                                            
                                            $articles = $bdd->prepare('SELECT * FROM alpha_articles WHERE nom_utilisateur = :nom_utilisateur ORDER BY id DESC');
                                            $articles->execute([
                                                                 'nom_utilisateur' => "Chris"
                                                                 ]);
                                            while($article = $articles->fetch()) {
                                                
                                        ?>
                                        <article class="hentry media-cell">
                                            <div class="media-box">
                                                <img src="<?= $article['background']; ?>" alt="post-image">
                                                <div class="mask"></div>
                                                <a href="article/<?= $article['id']; ?>"></a>
                                            </div>
                            
                                            <header class="media-cell-desc">
                                                <span class="cat-links">
													<a href="article/<?= $article['id']; ?>" rel="category tag"><?= $article['titre']; ?></a>	
                                                </span>
                                                <h3>
                                                    <a href="article/<?= $article['id']; ?>"><?= $article['description']; ?></a>
                                                </h3>
                                            </header>
                            
                                        </article>
                                        <?php } ?>

                                    </div>

                                    <p class="launch">
                                        <a class="button" href="blog">VISUALISER TOUS LES ARTICLES</a>
                                    </p>

                                </div>
                            </article>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
