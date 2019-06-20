<div id="exprience" class="exprience-section section-padding">
<div class="container">
<div class="row">

<div class="col-sm-4">
<div class="section-title">
<h1><?php echo htmlspecialchars_decode($lang['exp_section']); ?></h1>
</div>  
</div>

<div class="col-sm-8">
<div class="text-info">
<h4>
<?php 
$date_actuelle = date("Y");  
$date_lancement = "2006";
$calcul = $date_actuelle - $date_lancement;
?>
<?php echo $calcul; ?> <?php echo htmlspecialchars_decode($lang['exp_exp']); ?></h4>
<p><?php echo htmlspecialchars_decode($lang['exp_desc']); ?></p>
</div>

<?php
$Exp = $bdd->query('SELECT * FROM experience ORDER BY date DESC');
while($Exps = $Exp->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="exprience">
<div class="exprience-image">
<img class="img-responsive" src="<?php echo htmlspecialchars_decode($Exps['logo']); ?>" alt="<?php echo htmlspecialchars_decode($Exps['poste']); ?>">
</div>
<div class="exprience-info">
<h3>
<?php if($details->country == "FR") { ?>
<?php echo htmlspecialchars_decode($Exps['poste_fr']); ?>
<?php } elseif($details->country == "IT") { ?>
<?php echo htmlspecialchars_decode($Exps['poste_it']); ?>
<?php } elseif($details->country == "ES") { ?>
<?php echo htmlspecialchars_decode($Exps['poste_es']); ?>
<?php } elseif($details->country == "GB") { ?>
<?php echo htmlspecialchars_decode($Exps['poste_en']); ?>
<?php } else { ?>
<?php echo htmlspecialchars_decode($Exps['poste_en']); ?>
<?php } ?>	
</h3>
<h5><?php echo htmlspecialchars_decode($Exps['date']); ?></h5>
<p>
<?php if($details->country == "FR") { ?>
<?php echo htmlspecialchars_decode($Exps['description_fr']); ?>
<?php } elseif($details->country == "IT") { ?>
<?php echo htmlspecialchars_decode($Exps['description_it']); ?>
<?php } elseif($details->country == "ES") { ?>
<?php echo htmlspecialchars_decode($Exps['description_es']); ?>
<?php } elseif($details->country == "GB") { ?>
<?php echo htmlspecialchars_decode($Exps['description_en']); ?>
<?php } else { ?>
<?php echo htmlspecialchars_decode($Exps['description_en']); ?>
<?php } ?>
</p>
</div>                            
</div>
<hr>
<?php } ?>

</div>
</div>
</div>
</div>