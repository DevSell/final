<?php
date_default_timezone_set('Europe/Paris');
require_once('configurations/connexion-bdd.php');
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
session_start();

$TableConfigurations = $bdd->prepare('SELECT * FROM configurations_cms WHERE id = ?');
$TableConfigurations->execute(array("1"));
$DetailsTableConfigurations = $TableConfigurations->fetch();

require_once('fonctions/traduction.php');


if($DetailsTableConfigurations['maintenance'] == "oui")
{
header('Location: '.htmlspecialchars(trim($DetailsTableConfigurations['lien_site'])).'/maintenance');
exit();
}

function get_ip() {
if (isset($_SERVER['HTTP_CLIENT_IP'])) {
return $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
return $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
}
}

$injection = 'INSERT|UNION|SELECT|NULL|COUNT|FROM|LIKE|DROP|TABLE|WHERE|COUNT|COLUMN|TABLES|INFORMATION_SCHEMA|OR';
foreach($_GET as $getSearchs)
{
$getSearch = explode(" ",$getSearchs);
foreach($getSearch as $k=>$v)
{
if(in_array(strtoupper(trim($v)),explode('|',$injection)))
{
exit;
}
}
}
?>
