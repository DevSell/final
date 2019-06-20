<li>
<div class="collapsible-header"><i class="material-icons">business_center</i>Expériences</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_experiences WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                       'nom_utilisateur' => $session
                       ]);
    while($article = $articles->fetch()) {
        ?>
<li class="collection-item avatar">
<img src="<?= $article['background']; ?>" alt="" class="circle">
<span class="title"><?= $article['societe']; ?></span>
<p><?= $article['desc']; ?></p>

<form method="post">
<div class="secondary-content">

<a href="#experience-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-exp" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

</form>

<div id="experience-<?= $article['id']; ?>" class="modal">
<div class="modal-content">
<form method="post" class="col s12">

<div class="row">
<div class="input-field col s6">
<input name="dates" value="<?= $article['dates']; ?>" id="dates" type="text" class="validate">
<label for="dates">Dates</label>
</div>

<div class="input-field col s6">
<input name="poste" value="<?= $article['poste']; ?>" id="poste" type="text" class="validate">
<label for="poste">Poste</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<input name="societe" value="<?= $article['societe']; ?>" id="societe" type="text" class="validate">
<label for="societe">Société</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="exp-desc" class="materialize-textarea ckeditor"><?= $article['description']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="exp-desc-en" class="materialize-textarea ckeditor"><?= $article['desc_en']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="exp-desc-it" class="materialize-textarea ckeditor"><?= $article['desc_it']; ?></textarea>
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-exp">Modifier
<i class="material-icons right">send</i>
</button>
&nbsp;&nbsp;&nbsp;
</form>
</div>
</div>

</div>
</li>
<?php } ?>
</ul>
</span>
</div>
</li>
