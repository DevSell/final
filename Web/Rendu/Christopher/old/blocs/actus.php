<div id="blog" class="blog-section section-padding">
<div class="container">
<div class="row">

<div class="col-sm-4">
<div class="section-title">
<h1><?php echo htmlspecialchars_decode($lang['actus_section']); ?></h1>
</div>                            
</div>

<div class="col-sm-8">

<div class="text-info">
<h4><?php echo htmlspecialchars_decode($lang['actus_titre']); ?></h4>
<p><?php echo htmlspecialchars_decode($lang['actus_desc']); ?></p>
</div>

<div class="row">

<?php
$Act = $bdd->query('SELECT * FROM actus ORDER BY date DESC');
if($Act->rowCount() == 0)
{
echo ''.$lang['offres_aucune'].'';
} else {
while($Acts = $Act->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="col-sm-6">
<div class="entry-post">
<div class="entry-thumbnail">
<div class="thumbnail-oberlay"></div>
<img class="img-responsive" src="<?php echo htmlspecialchars_decode($Acts['image']); ?>" alt="<?php if($details->country == "FR") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_fr']); ?>
<?php } elseif($details->country == "IT") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_it']); ?>
<?php } elseif($details->country == "ES") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_es']); ?>
<?php } elseif($details->country == "EN") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_en']); ?>
<?php } else { ?>
<?php echo htmlspecialchars_decode($Acts['titre_en']); ?>
<?php } ?>">
</div>
<div class="post-content">
<div class="time">
<a href="actu.php?id=<?php echo htmlspecialchars_decode($Acts['id']); ?>"><?php echo date('d', intval($Acts['date'])); ?> <span><?php echo date('M', intval($Acts['date'])); ?></span></a>
</div>
<div class="entry-title">
<h2><a href="actu.php?id=<?php echo htmlspecialchars_decode($Acts['id']); ?>">
<?php if($details->country == "FR") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_fr']); ?>
<?php } elseif($details->country == "IT") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_it']); ?>
<?php } elseif($details->country == "ES") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_es']); ?>
<?php } elseif($details->country == "EN") { ?>
<?php echo htmlspecialchars_decode($Acts['titre_en']); ?>
<?php } else { ?>
<?php echo htmlspecialchars_decode($Acts['titre_en']); ?>
<?php } ?></a></h2>
</div> 
</div>
</div>                        
</div>
<?php }} ?>                    
</div>                       
</div>
</div>
</div>
</div>