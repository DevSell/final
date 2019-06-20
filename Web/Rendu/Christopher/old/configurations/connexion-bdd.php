<?php
try
{
	$bdd = new PDO('mysql:host=pma.devside.fr;dbname=Chris', 'Chris', '67KsEiizlGec7HLc');
	$bdd->exec('SET NAMES UTF8');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>