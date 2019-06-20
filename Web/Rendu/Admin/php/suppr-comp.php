<?php
    if(isset($_POST['suppr-comp'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_competences WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "Compétence supprimée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>

