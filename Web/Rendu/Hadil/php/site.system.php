<?php
    // INF SITE (NE PAS TOUCHEZ)
    $sites = $bdd->prepare('SELECT * FROM alpha_site WHERE nom_utilisateur = :nom_utilisateur');
    $sites->execute([
                    'nom_utilisateur' => 'Hadil'
                    ]);
    if($sites->rowCount() == 1) {
        $site = $sites->fetch();
        $avatar_image = "https://cdn.wibbo.me/habbo-imaging/avatarimage.php?figure=";
    } else {
        die('Une erreur est survenue (<b>#604105</b>), contactez Cypher en cliquant <a href="https://habbo-dev.fr/membre/4768-cypher/">ici</a>.');
    }
    
    // MAINTENANCE (NE PAS TOUCHER)
    if(!isset($maintenance_false)) {
        if($site['maintenance'] == 1) {
            if(isset($_SESSION['id'])) {
                if($session['rank'] <= 3) {
                    header('Location: /logout');
                    exit();
                }
            } else {
                header('Location: /maintenance');
                exit();
            }
        }
    }
    
    $copy = date("Y");

    ?>
