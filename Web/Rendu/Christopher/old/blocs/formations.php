<div id="education" class="exprience-section bg-color section-padding">
<div class="container">
<div class="row">

<div class="col-sm-4">
<div class="section-title">
<h1><?php echo htmlspecialchars_decode($lang['formations_section']); ?></h1>
</div> 
</div>

<div class="col-sm-8">
<div class="text-info">
<h4><?php echo htmlspecialchars_decode($lang['formations_form']); ?></h4>
<p><?php echo htmlspecialchars_decode($lang['formations_desc']); ?></p>
</div>

<?php
$For = $bdd->query('SELECT * FROM formations ORDER BY date DESC');
while($Fors = $For->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="exprience">
<div class="exprience-image">
<img class="img-responsive" src="<?php echo htmlspecialchars_decode($Fors['logo']); ?>" alt="Image">
</div>
<div class="exprience-info">
<h3><?php echo htmlspecialchars_decode($Fors['diplome']); ?></h3>
<h5><?php echo htmlspecialchars_decode($Fors['date']); ?></h5>
<p>
<?php if($details->country == "FR") { ?>
<?php echo htmlspecialchars_decode($Fors['description_fr']); ?>
<?php } elseif($details->country == "IT") { ?>
<?php echo htmlspecialchars_decode($Fors['description_it']); ?>
<?php } elseif($details->country == "ES") { ?>
<?php echo htmlspecialchars_decode($Fors['description_es']); ?>
<?php } elseif($details->country == "GB") { ?>
<?php echo htmlspecialchars_decode($Fors['description_en']); ?>
<?php } else { ?>
<?php echo htmlspecialchars_decode($Fors['description_en']); ?>
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