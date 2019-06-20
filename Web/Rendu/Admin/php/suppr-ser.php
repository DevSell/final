<?php
    if(isset($_POST['suppr-ser'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_services WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "Service supprimé avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>

