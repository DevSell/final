<?php
    if(isset($_POST['suppr-cli'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_clients WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "Client supprimé avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>
