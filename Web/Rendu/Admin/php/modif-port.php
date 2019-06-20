<?php
    if(isset($_POST['modif-port'])) {
        $titre = $_POST['titre'];
        $type = $_POST['type'];
        $image = $_POST['image'];
        $description = htmlspecialchars(trim($_POST['port-desc']));
        $description = utf8_encode($_POST['port-desc']);
        $description = str_replace('ï»¿', '', $description);
        $description = utf8_decode($description);
        $desc_en = htmlspecialchars(trim($_POST['port-desc-en']));
        $desc_en = utf8_encode($_POST['port-desc-en']);
        $desc_en = str_replace('ï»¿', '', $desc_en);
        $desc_en = utf8_decode($desc_en);
        $desc_it = htmlspecialchars(trim($_POST['port-desc-it']));
        $desc_it = utf8_encode($_POST['port-desc-it']);
        $desc_it = str_replace('ï»¿', '', $desc_it);
        $desc_it = utf8_decode($desc_it);
        $lien = $_POST['lien'];
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_portfolio SET titre = :titre, type = :type, image = :image, description = :description, desc_en = :desc_en, desc_it = :desc_it, lien = :lien WHERE id = :id');
        $update_settings->execute([
                                  'titre' => $titre,
                                  'type' => $type,
                                  'image' => $image,
                                  'description' => $description,
                                  'desc_en' => $desc_en,
                                  'desc_it' => $desc_it,
                                  'lien' => $lien,
                                  'id' => $id_article
                                  ]);
        $erreurok = "Portfolio modifié avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>




