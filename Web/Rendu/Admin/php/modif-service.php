<?php
    if(isset($_POST['modif-ser'])) {
        $image = $_POST['image'];
        $titre = $_POST['titre'];
        $titre_en = $_POST['titre_en'];
        $titre_it = $_POST['titre_it'];
        $description = htmlspecialchars(trim($_POST['ser-descri']));
        $description = utf8_encode($_POST['ser-descri']);
        $description = str_replace('ï»¿', '', $description);
        $description = utf8_decode($description);
        $desc_en = htmlspecialchars(trim($_POST['ser-descri-en']));
        $desc_en = utf8_encode($_POST['ser-descri-en']);
        $desc_en = str_replace('ï»¿', '', $desc_en);
        $desc_en = utf8_decode($desc_en);
        $desc_it = htmlspecialchars(trim($_POST['ser-descri-it']));
        $desc_it = utf8_encode($_POST['ser-descri-it']);
        $desc_it = str_replace('ï»¿', '', $desc_it);
        $desc_it = utf8_decode($desc_it);
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_services SET image = :image, titre = :titre, description = :description, description_en = :description_en, description_it = :description_it, titre_en = :titre_en, titre_it = :titre_it WHERE id = :id');
        $update_settings->execute([
                                  'image' => $image,
                                  'titre' => $titre,
                                  'description' => $description,
                                  'description_en' => $desc_en,
                                  'description_it' => $desc_it,
                                  'titre_en' => $titre_en,
                                  'titre_it' => $titre_it,
                                  'id' => $id_article
                                  ]);
        $erreurok = "Service modifié avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>






