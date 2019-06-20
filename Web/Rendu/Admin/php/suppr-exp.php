<?php
    if(isset($_POST['suppr-exp'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_experiences WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "Expérience supprimée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>

