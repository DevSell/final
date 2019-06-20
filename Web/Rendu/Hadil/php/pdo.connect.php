<?php
// CONNEXION BDD PDO
try{
    $host = "pma.devsell.fr"; // Hôte de ta base de données.
    $nom_bdd = "ChrisAlpha"; //Nom de ta base de données.
    $user_bdd = "ChrisAlpha"; // Nom d'utilisateur de ta base de données.
    $mdp_bdd = "R8rLpS9RSbBRrURu"; // Le mot de passe de ta base de données.
    $bdd = new PDO('mysql:host='.$host.';dbname='.$nom_bdd.';charset=utf8', ''.$user_bdd.'', ''.$mdp_bdd.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
?>