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
                                <h1 class="entry-title">cv</h1>
                            </header>
                                            
                            <div class="entry-content">
                                <div class="row">
                                    <div class="col-sm-6">
                            
                                        <div class="event">
                                            <h2>EXPÉRIENCE PROFESIONNELLE</h2>
                                            <p>
                                                <i class="pe-7s-ribbon"></i>
                                            </p>
                                        </div>
                                                  
                                        <?php
                                            $exps = $bdd->prepare('SELECT * FROM alpha_experiences WHERE nom_utilisateur = :nom_utilisateur ORDER BY id');
                                            $exps->execute([
                                                                 'nom_utilisateur' => "Chris"
                                                                 ]);
                                            while($exp = $exps->fetch()) {
                                        ?>      
                                        <div class="event">
                                        <h3><?= $exp['dates']; ?></h3>
                                        <h4><?= $exp['poste']; ?></h4>
                                        <h5><?= $exp['societe']; ?></h5>
                                        <p><?= $exp['description']; ?></p>
                                        </div>
                                        <?php } ?>

                        
                                        <center><p><a href="pdf/CV-2019.pdf" class="button"><i class="pe-7s-download"></i>Télécharger le CV</a></p></center>
                                                        
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="section-title center">    
                                            <h2>
                                                <i>compétences informatique</i>
                                            </h2>
                                        </div>
                                              
                                        <?php
                                            $comps_info = $bdd->prepare('SELECT * FROM alpha_competences WHERE nom_utilisateur = :nom_utilisateur AND type = :type ORDER BY pct DESC');
                                            $comps_info->execute([
                                                                 'nom_utilisateur' => "Chris",
                                                                 'type' => "Informatique"
                                                           ]);
                                            while($comp_info = $comps_info->fetch()) {
                                        ?>      
                                        <div class="skill-unit">
                                            <i class="pe-7s-gleam"></i>
                                            <h4><?= $comp_info['competence']; ?></h4>
                                            <div class="bar" data-percent="<?= $comp_info['pct']; ?>">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        
                                        <div class="section-title center">    
                                            <h2>
                                                <i>compétences commerciales</i>
                                            </h2>
                                        </div>

                                        <?php
                                            $comps_com = $bdd->prepare('SELECT * FROM alpha_competences WHERE nom_utilisateur = :nom_utilisateur AND type = :type ORDER BY pct DESC');
                                            $comps_com->execute([
                                                                 'nom_utilisateur' => "Chris",
                                                                 'type' => "Commerciale"
                                                                 ]);
                                            while($comp_com = $comps_com->fetch()) {
                                        ?>
                                        <div class="skill-unit">
                                            <i class="pe-7s-chat"></i>
                                            <h4><?= $comp_com['competence']; ?></h4>
                                            <div class="bar" data-percent="<?= $comp_com['pct']; ?>">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                        <?php } ?>
                            
                            
                                        <div class="event">
                                            <h2>SCOLARITÉ</h2>
                                            <p>
                                                <i class="pe-7s-study"></i>
                                            </p>
                                        </div>
                        
                                        <?php
                                            $scolarites = $bdd->prepare('SELECT * FROM alpha_scolarite WHERE nom_utilisateur = :nom_utilisateur ORDER BY id');
                                            $scolarites->execute([
                                                                'nom_utilisateur' => "Chris"
                                                                ]);
                                            while($scolarite = $scolarites->fetch()) {
                                        ?>     
                                        <div class="event">
                                            <h3><?= $scolarite['dates']; ?></h3>
                                            <h4><?= $scolarite['diplome']; ?></h4>
                                            <h5><?= $scolarite['ecole']; ?></h5>
                                            <p><?= $scolarite['description']; ?></p>
                                        </div>
                                        <?php } ?>
                                     
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
