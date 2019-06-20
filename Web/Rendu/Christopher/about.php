<?php
require('global.php');
?>
<body>
    <div class="site-middle">
        <div class="layout-fixed"> 
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main"> <!-- .page-single -->
                    <div class="page-single page-layout">
                                
                        <article class="page hentry">

                            <header class="entry-header">
                                <h1 class="entry-title">À propos de moi</h1>
                            </header>

                            <div class="entry-content">
                                
                                <div class="section-title center">    
                                    <h2>
                                        <i>mes services</i>
                                    </h2>
                                </div>
      
                                <div class="row">

                                    <?php
                                        $services = $bdd->prepare('SELECT * FROM alpha_services WHERE nom_utilisateur = :nom_utilisateur ORDER BY id DESC');
                                        $services->execute([
                                                             'nom_utilisateur' => "Chris"
                                                             ]);
                                        while($service = $services->fetch()) {
                                    ?>
                                    <div class="col-sm-6 col-md-6">                                        
                                        <div class="service">
                                            <img src="<?= $service['image']; ?>" alt="<?= $service['titre']; ?>"/>
                                            <h4><b><?= $service['titre']; ?></b></h4>
                                            <p><?= $service['description']; ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>

                                <div class="section-title center">    
                                    <h2>
                                        <i>méthode de travail</i>
                                    </h2>
                                </div>

                                <div class="row">

                                    <div class="col-xs-4 col-sm-2">   
                                        <div class="process">
                                            <i class="pe-7s-comment"></i>
                                            <h4>QUESTIONNER</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-2">
                                        <div class="process">
                                            <i class="pe-7s-light"></i>
                                            <h4>PROPOSER</h4>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xs-4 col-sm-2">
                                        <div class="process">
                                            <i class="pe-7s-scissors"></i>
                                            <h4>CONCEPTUALISER</h4>
                                        </div>
                                    </div>
                                           
                                    <div class="col-xs-4 col-sm-2">
                                        <div class="process">
                                            <i class="pe-7s-tools"></i>
                                            <h4>DÉVELOPPER</h4>
                                         </div>
                                    </div>
                                        
                                    <div class="col-xs-4 col-sm-2">
                                        <div class="process">
                                            <i class="pe-7s-browser"></i>
                                            <h4>TESTER</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-2">
                                        <div class="process">
                                            <i class="pe-7s-rocket"></i>
                                            <h4>LANCER</h4>
                                        </div>
                                    </div>
                                                    
                                </div>
                                
                                <div class="section-title center">    
                                    <h2>
                                        <i>clients</i>
                                    </h2>
                                </div>

                                <div class="row"> 

                                    <?php
                                        
                                        $clients = $bdd->prepare('SELECT * FROM alpha_clients WHERE nom_utilisateur = :nom_utilisateur ORDER BY id DESC');
                                        $clients->execute([
                                                             'nom_utilisateur' => "Chris"
                                                             ]);
                                        while($client = $clients->fetch()) {
                                            
                                    ?>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="client">
                                            <a target="_blank" href="<?= $client['lien']; ?>">
                                                <img src="<?= $client['image']; ?>" alt="<?= $client['lien']; ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                                
                                <div class="section-title center">    
                                    <h2>
                                        <i>devlife</i>
                                    </h2>
                                </div>
                                
                                <div class="row">

                                    <div class="col-xs-6 col-sm-3">                                     
                                        <div class="fun-fact">
                                            <i class="pe-7s-map-2"></i>
                                            <h4>5 Pays visités</h4>
                                       </div>
                                    </div>
                                                    
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="fun-fact">
                                            <i class="pe-7s-album"></i>
                                            <h4>30 Vidéos réalisées</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="fun-fact">
                                            <i class="pe-7s-coffee"></i>
                                            <h4>10.000 Tasses de café</h4>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="fun-fact">
                                            <i class="pe-7s-medal"></i>
                                            <h4>4 Prix remportés</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
