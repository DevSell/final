<div id="contact" class="contact-section bg-color section-padding">
<div class="container">
<div class="row">

<div class="col-sm-4">
<div class="section-title">
<h1><?php echo htmlspecialchars_decode($lang['contact_section']); ?></h1>
</div>                            
</div>

<div class="col-sm-8">
<div class="section-content">

<div class="text-info">
<h4><?php echo htmlspecialchars_decode($lang['contact_titre']); ?></h4>
<p><?php echo htmlspecialchars_decode($lang['contact_desc']); ?></p>
</div>

<div class="address">
<ul>

<li>
<div class="icons">
<i class="fa fa-map-signs" aria-hidden="true"></i>
</div>
<h3><?php echo htmlspecialchars_decode($lang['contact_adresse']); ?></h3>
<p>15 rue des villechats, 94360, Bry-Sur-Marne</p>
</li>

<li>
<div class="icons icons1">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<h3><?php echo htmlspecialchars_decode($lang['contact_tel']); ?></h3>
<p><a href="tel:+33687811686">06 87 81 16 86</a></p>
</li>

<li>
<div class="icons icons2">
<i class="fa fa-envelope-o" aria-hidden="true"></i>
</div>
<h3><?php echo htmlspecialchars_decode($lang['contact_mail']); ?></h3>
<a href="mailto:christopher.dolbert@ynov.com">christopher.dolbert@ynov.com</a>
</li>

<li>
<div class="icons icons3">
<i class="fa fa-external-link" aria-hidden="true"></i>
</div>
<h3><?php echo htmlspecialchars_decode($lang['contact_profils']); ?></h3>
<ul class="social list-inline">
<li><a target="_blank" href="https://www.societe.com/societe/monsieur-christopher-dolbert-834802407.html">MONSIEUR CHRISTOPHER DOLBERT</a>, <br>
SIRET N°<b>83480240700017</b></li>
</ul>
</li>

</ul>                            
</div>

<div class="contact">

<div class="contact-info">
<div class="title">
<div class="icons">
<i class="fa fa-commenting-o" aria-hidden="true"></i> 
</div>                                
<h3><?php echo htmlspecialchars_decode($lang['contact_laissez']); ?></h3>
</div>    
<p><?php echo htmlspecialchars_decode($lang['contact_laissez_desc']); ?></p>
</div>

<form class="contact-form" method="post">
<div class="row">

<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" required="required" name="name" placeholder="<?php echo htmlspecialchars_decode($lang['contact_form_nom']); ?>" required>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input type="email" class="form-control" required="required" name="email" placeholder="<?php echo htmlspecialchars_decode($lang['contact_form_email']); ?>" required>
</div> 
</div>

<div class="col-sm-12">
<div class="form-group">
<input type="text" class="form-control" required="required" name="sujet" placeholder="<?php echo htmlspecialchars_decode($lang['contact_form_sujet']); ?>" required>
</div> 
</div>

<div class="col-sm-12">
<div class="form-group">
<textarea name="message" required="required" class="form-control" rows="7" name="message" placeholder="<?php echo htmlspecialchars_decode($lang['contact_form_message']); ?>" required></textarea>
</div>             
</div>     

</div>

<div class="form-group pull-right">
<button type="submit" name="soumettre" class="btn btn-primary"><?php echo htmlspecialchars_decode($lang['contact_form_soumettre']); ?></button>
</div>

</form>                            
</div>
</div>
</div>
</div>
</div>
</div>
