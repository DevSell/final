<?php
if(isset($_POST['ajout-article'])) {
    if(!empty($_POST['titre']) AND !empty($_POST['description']) AND $_POST['background'] != "" AND $_POST['contenu'] != "") {
        
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $background = htmlspecialchars($_POST['background']);
        $contenu = htmlspecialchars(trim($_POST['contenu']));
        $contenu = utf8_encode($_POST['contenu']);
        $contenu = str_replace('ï»¿', '', $contenu);
        $contenu = utf8_decode($contenu);

        $insert_article = $bdd->prepare('INSERT INTO alpha_articles (titre, description, background, contenu, date_p, auteur, nom_utilisateur) VALUES (:titre, :description, :background, :contenu, :date_p, :auteur, :nom_utilisateur)');
            $insert_article->execute([
                                   'titre' => $titre,
                                   'description' => $description,
                                   'background' => $background,
                                   'contenu' => $contenu,
                                   'date_p' => time(),
                                   'auteur' => $session,
                                   'nom_utilisateur' => $session
                                   ]);
        
            $erreurok = "L'article a bien été ajouté à votre portfolio.";
        
    } else {
        $erreur = "Merci de remplir tous les champs.";
    }
}
?>
