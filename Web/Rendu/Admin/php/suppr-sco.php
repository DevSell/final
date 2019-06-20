<?php
    if(isset($_POST['suppr-sco'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_scolarite WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "École supprimée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>

