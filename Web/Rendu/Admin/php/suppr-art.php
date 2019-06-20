<?php
    if(isset($_POST['suppr-art'])) {
        $id_article = $_POST['id_article'];
        
        $suppr = $bdd->prepare('DELETE FROM alpha_articles WHERE id = :id');
        $suppr->execute([
                                  'id' => $id_article
                                  ]);
        $erreurok = "Article supprimé avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>
