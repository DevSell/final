<li>
<div class="collapsible-header"><i class="material-icons">school</i>Scolarités</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_scolarite WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                       'nom_utilisateur' => $session
                       ]);
    while($article = $articles->fetch()) {
        ?>
<li class="collection-item avatar">
<img src="<?= $article['image']; ?>" alt="" class="circle">
<span class="title"><?= $article['ecole']; ?></span>
<p><?= $article['diplome']; ?></p>

<form method="post">
<div class="secondary-content">

<a href="#scolarite-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-sco" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

</form>

<div id="scolarite-<?= $article['id']; ?>" class="modal">
<div class="modal-content">
<form method="post" class="col s12">

<div class="row">
<div class="input-field col s6">
<input name="ecole" value="<?= $article['ecole']; ?>" id="ecole" type="text" class="validate">
<label for="ecole">École</label>
</div>

<div class="input-field col s6">
<input name="diplome" value="<?= $article['diplome']; ?>" id="diplome" type="text" class="validate" readonly>
<label for="diplome">Diplôme</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="sco-desc" class="materialize-textarea ckeditor"><?= $article['description']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="sco-desc-en" class="materialize-textarea ckeditor"><?= $article['desc_en']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="sco-desc-it" class="materialize-textarea ckeditor"><?= $article['desc_it']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<input name="dates" value="<?= $article['dates']; ?>" id="dates" type="text" class="validate">
<label for="dates">Dates</label>
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-sco">Modifier
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
