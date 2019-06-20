<?php
if($details->country == "FR") {
require_once('langues/fr.php');
} elseif($details->country == "IT") {
require_once('langues/it.php');
} elseif($details->country == "ES") {
require_once('langues/es.php');
} elseif($details->country == "GB") {
require_once('langues/en.php');
} else {
require_once('langues/en.php');
exit;
}
?>