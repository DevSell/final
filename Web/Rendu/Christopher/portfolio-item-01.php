<?php
require('global.php');
$id = intval(trim(htmlspecialchars($_GET['id'])));
$Portfolios = $bdd->prepare("SELECT * FROM alpha_portfolio WHERE id = ?");
$Portfolios->execute(array($id));
$Portfolio = $Portfolios->fetch(PDO::FETCH_ASSOC);
?>
<body>
    <div class="site-middle">
        <div class="layout-medium"> 
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div class="portfolio-single page-layout">
                                    
                        <article class="hentry">

                            <header class="entry-header"> 
                                <div class="portfolio-nav">
                                    <a class="back" href="#/portfolio"></a>
                                </div>                              
                                <h1 class="entry-title"><?= $Portfolio['titre']; ?></h1>
                            </header>

                            <div class="entry-content">
                                <p>
                                    <img src="<?= $Portfolio['image']; ?>" alt="<?= $Portfolio['titre']; ?>">
                                </p>
                                
                                <div class="mini-text">
                                    <h4><?= $Portfolio['titre']; ?> ?</h4>
                                    <p><?= $Portfolio['description']; ?></p>
                                    <h4>TYPE DE CRéation</h4>
                                    <p><?= $Portfolio['type']; ?></p>
                                    <p>
                                    <a href="<?= $Portfolio['lien']; ?>"  target="_blank" class="button">VISUALISER</a>
                                    </p>                             
                                </div>
                            
                            </div>
                        </article>
                    </div>
                </div>
             </div>
        </div>
    </div>
</body>
