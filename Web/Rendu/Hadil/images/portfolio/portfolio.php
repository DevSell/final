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
                                <h1 class="entry-title">portfolio</h1>
                            </header>
                            
                            <div class="entry-content">
                                <ul id="filters" class="filters">

                                    <li class="current">
                                        <a href="#" data-filter="*">tous</a>
                                    </li>

                                    <li>
                                        <a href="#" data-filter=".vitrine">Vitrine</a>
                                    </li>
                                                    
                                    <li>
                                        <a href="#" data-filter=".cms">CMS</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" data-filter=".plugins">Plugins</a>
                                    </li>

                                </ul>
                            
                                <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">

                                    <?php
                                        $portfolios = $bdd->query('SELECT * FROM alpha_portfolio ORDER BY id');
                                        while ($portfolio = $portfolios->fetch()) {
                                    ?>
                                    <div class="media-cell <?= $portfolio['type']; ?> hentry">
                                        <div class="media-box">
                                            <img src="<?= $portfolio['image']; ?>" alt="portfolio-post">
                                            <div class="mask"></div>
                                            <a href="portfolio-item-01.php" class="ajax"></a>
                                         </div>
                            
                                        <div class="media-cell-desc">
                                            <h3><?= $portfolio['titre']; ?></h3>
                                            <p class="category"><?= $portfolio['desc']; ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>