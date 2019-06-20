<header id="masthead" class="header" role="banner">
    <div class="header-wrap layout-full">
        <img src="images/home/home.jpg" alt="profile-image">
            <h1 class="site-title"><?= $site['nom']; ?></h1>
            <p class="site-description">Je suis <strong id="typist-element" data-typist="un développeur web., un graphiste., un passionné., un commercial., un vendeur., un promoteur.">un développeur d'app.</strong></p>
            <div class="header-bottom">
                <p>
                    <a target="_blank" class="social-link facebook" href="<?= $site['fb']; ?>"></a>
                    <a target="_blank" class="social-link twitter" href="<?= $site['twitter']; ?>"></a>
                </p>
            </div>

            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                 <div class="nav-menu menu-with-icons">
                    <ul>
                    </ul>
                </div>
            </nav>

            <div class="header-search">
                <form role="search" method="get" id="search-form" action="#">
                    <input type="text" value="" name="s" id="search" placeholder="tapez et cliquez sur 'Entrer'">
                    <input type="submit" id="search-submit" title="Rechercher un article..." value="→">
                </form>
            </div>                                        
    </div>

    <a class="mouse-scroll" href="#"> 
        <span class="mouse">
            <span class="mouse-movement"> 
            </span>
        </span>
    </a>
                    
</header>