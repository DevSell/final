<?php
    if(isset($_POST['modif-article'])) {
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $background = $_POST['background'];
            $contenu = $_POST['contenu'];
            $id_article = $_POST['id_article'];
            $update_settings = $bdd->prepare('UPDATE alpha_articles SET titre = :titre, description = :description, background = :background, contenu = :contenu WHERE id = :id');
            $update_settings->execute([
                                      'titre' => $titre,
                                      'description' => $description,
                                      'background' => $background,
                                      'contenu' => $contenu,
                                      'id' => $id_article
                                      ]);
        $erreurok = "Article modifié avec succès";
        } else {
            $erreur = "Une erreur est survenue.";
        }
?>
