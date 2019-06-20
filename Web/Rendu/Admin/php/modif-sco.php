<?php
    if(isset($_POST['modif-sco'])) {
        $ecole = $_POST['ecole'];
        $diplome = $_POST['diplome'];
        $description = htmlspecialchars(trim($_POST['sco-desc']));
        $description = utf8_encode($_POST['sco-desc']);
        $description = str_replace('ï»¿', '', $description);
        $description = utf8_decode($description);
        $desc_en = htmlspecialchars(trim($_POST['sco-desc-en']));
        $desc_en = utf8_encode($_POST['sco-desc-en']);
        $desc_en = str_replace('ï»¿', '', $desc_en);
        $desc_en = utf8_decode($desc_en);
        $desc_it = htmlspecialchars(trim($_POST['sco-desc-it']));
        $desc_it = utf8_encode($_POST['sco-desc-it']);
        $desc_it = str_replace('ï»¿', '', $desc_it);
        $desc_it = utf8_decode($desc_it);
        $dates = $_POST['dates'];
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_scolarite SET ecole = :ecole, diplome = :diplome, description = :description, desc_en = :desc_en, desc_it = :desc_it, dates = :dates WHERE id = :id');
        $update_settings->execute([
                                  'ecole' => $ecole,
                                  'diplome' => $diplome,
                                  'description' => $description,
                                  'desc_en' => $desc_en,
                                  'desc_it' => $desc_it,
                                  'dates' => $dates,
                                  'id' => $id_article
                                  ]);
        $erreurok = "École modifiée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>





