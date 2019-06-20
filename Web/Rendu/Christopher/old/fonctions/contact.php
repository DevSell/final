<?php
if (isset($_POST['soumettre'])) {
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
$TableConfigurations = $bdd->prepare('SELECT * FROM configurations_cms WHERE id = ?');
$TableConfigurations->execute(array("1"));
$DetailsTableConfigurations = $TableConfigurations->fetch();

$name       = @trim(stripslashes($_POST['name'])); 
$email       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['sujet'])); 
$message    = @trim(stripslashes($_POST['message'])); 

if($details->country == "FR") {
$to = ''.$DetailsTableConfigurations['email_fr'].'';
} elseif($details->country == "IT") {
$to = ''.$DetailsTableConfigurations['email_it'].'';
} elseif($details->country == "ES") {
$to = ''.$DetailsTableConfigurations['email_es'].'';
} elseif($details->country == "GB") {
$to = ''.$DetailsTableConfigurations['email_en'].'';
}

$headers   = "";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: {$name} <{$email}>\r\n";
$headers .= "Reply-To: <{$email}>\r\n";
$headers .= "Subject: {$subject}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

mail($to, $subject, $message, $headers);
$erreurok = "Votre mail a bien été envoyé !";
}
?>