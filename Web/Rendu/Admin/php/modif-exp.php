<?php
    if(isset($_POST['modif-exp'])) {
        $dates = $_POST['dates'];
        $poste = $_POST['poste'];
        $societe = $_POST['societe'];
        $description = htmlspecialchars(trim($_POST['exp-desc']));
        $description = utf8_encode($_POST['exp-desc']);
        $description = str_replace('ï»¿', '', $description);
        $description = utf8_decode($description);
        $desc_en = htmlspecialchars(trim($_POST['exp-desc-en']));
        $desc_en = utf8_encode($_POST['exp-desc-en']);
        $desc_en = str_replace('ï»¿', '', $desc_en);
        $desc_en = utf8_decode($desc_en);
        $desc_it = htmlspecialchars(trim($_POST['exp-desc-it']));
        $desc_it = utf8_encode($_POST['exp-desc-it']);
        $desc_it = str_replace('ï»¿', '', $desc_it);
        $desc_it = utf8_decode($desc_it);
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_experiences SET dates = :dates, poste = :poste, societe = :societe, description = :description, desc_en = :desc_en, desc_it = :desc_it WHERE id = :id');
        $update_settings->execute([
                                  'dates' => $dates,
                                  'poste' => $poste,
                                  'societe' => $societe,
                                  'description' => $description,
                                  'desc_en' => $desc_en,
                                  'desc_it' => $desc_it,
                                  'id' => $id_article
                                  ]);
        $erreurok = "Expérience modifiée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>



