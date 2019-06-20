<?php
    if(isset($_POST['suppr-port'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_portfolio WHERE id = :id');
        $suppr->execute([
                        'id' => $id_article
                        ]);
        $erreurok = "Portfolio supprimé avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>

