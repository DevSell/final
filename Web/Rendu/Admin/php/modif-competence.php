<?php
    if(isset($_POST['modif-competence'])) {
        $competence = $_POST['competence'];
        $pct = $_POST['pct'];
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_competences SET competence = :competence, pct = :pct  WHERE id = :id');
        $update_settings->execute([
                                  'competence' => $competence,
                                  'pct' => $pct,
                                  'id' => $id_article
                                  ]);
        $erreurok = "Compétence modifiée avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>


