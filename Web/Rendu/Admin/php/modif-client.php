<?php
    if(isset($_POST['modif-client'])) {
        $image = $_POST['image'];
        $lien = $_POST['lien'];
        $id_article = $_POST['id_article'];
        $update_settings = $bdd->prepare('UPDATE alpha_clients SET image = :image, lien = :lien  WHERE id = :id');
        $update_settings->execute([
                                  'image' => $image,
                                  'lien' => $lien,
                                  'id' => $id_article
                                  ]);
        $erreurok = "Client modifié avec succès";
    } else {
        echo 'Une erreur est survenue.';
    }
    ?>

