<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
if($details->country == "FR") {
header('Location: index.php');
} elseif($details->country == "IT") {
header('Location: index.php');
} elseif($details->country == "ES") {
header('Location: index.php');
} elseif($details->country == "GB") {
header('Location: index.php');
}
?>