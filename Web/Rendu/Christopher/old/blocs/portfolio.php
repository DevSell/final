<div id="portfolio" class="portfolio-section section-padding">
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="section-title">
<h1>Portfolio</h1>
</div>                             
</div>
<div class="col-sm-8">
<div class="text-info">
<h4>Mes dernières créations</h4>
<p>Dans cette section, je vous expose mes dernières créations créées entièrement de A à Z.</p>
</div>
<div class="portfolio-content">
<div class="row">

<?php
$Cre = $bdd->query('SELECT * FROM creations ORDER BY id ASC');
while($Cres = $Cre->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="col-sm-6">
<div class="portfolio-item">
<img class="img-responsive" src="<?php echo htmlspecialchars_decode($Cres['screen']); ?>" alt="<?php echo htmlspecialchars_decode($Cres['nom']); ?>">
<div class="portfolio-overlay">
<div class="portfolio-info">
<a href="<?php echo htmlspecialchars_decode($Cres['screen']); ?>"><i class="fa fa-camera-retro" aria-hidden="true"></i></a>
<h3><?php echo htmlspecialchars_decode($Cres['nom']); ?></h3>
<p><?php echo htmlspecialchars_decode($Cres['technologie']); ?></p>
</div>
</div>
</div>
</div>
<?php } ?>
                                   
</div>
</div>
</div> 
</div>
</div>
</div>