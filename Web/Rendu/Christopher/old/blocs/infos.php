<div id="about" class="about-section section-padding">
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="section-title">
<h1>Chris D.</h1>
</div>                            
</div>

<div class="col-sm-8">

<div class="about-info">
<p><blockquote>Une confrontation permanente entre théorie et expérience est une condition nécessaire à l'expression de la créativité.</blockquote></p>
<div class="signature">
<h1>Chris D.</h1>
</div>
</div>

<address>
<p><span>Nom, Prénom :</span> Dolbert Christopher</p>
<p><span>E-mail :</span> <a href="mailto:christopher.dolbert@ynov.com">christopher.dolbert@ynov.com</a></p>
<p><span>Téléphone :</span> <a href="tel:+33687811686">06 87 81 16 86</a></p>
<p><span>Date de naissance :</span> 28 Oct, 1996</p>
<p><span>Addresse :</span> 15 rue des villechats, 94360, Bry-Sur-Marne</p>
</address>

<ul class="achievement">

<?php
$Projet = $bdd->prepare('SELECT * FROM stats_cms WHERE id = ?');
$Projet->execute(array("1"));
$Projets = $Projet->fetch();
?>
<li class="achievement-info">
<span class="counter"><?php echo htmlspecialchars(trim($Projets['projets_termines'])); ?></span>
<h4>Projets terminés</h4>
</li> 

<li class="achievement-info">
<span class="counter counter2"><?php echo htmlspecialchars(trim($Projets['clients_satisfaits'])); ?></span>
<h4>Clients satisfaits</h4>
</li> 

<li class="achievement-info">
<span class="counter counter3"><?php echo htmlspecialchars(trim($Projets['projets_en_cours'])); ?></span>
<h4>Projets en cours</h4>
</li>

<li class="achievement-info">
<span class="counter counter1"><?php echo htmlspecialchars(trim($Projets['prix_remportes'])); ?></span>
<h4>Prix remportés</h4>
</li> 

</ul>

</div>
</div>
</div>
</div>