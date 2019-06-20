<li>
<div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Portfolio</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_portfolio WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                       'nom_utilisateur' => $session
                       ]);
    while($article = $articles->fetch()) {
        ?>
<li class="collection-item avatar">
<img src="<?= $article['image']; ?>" alt="" class="circle">
<span class="title"><?= $article['titre']; ?></span>
<p><?= $article['description']; ?></p>

<form method="post">
<div class="secondary-content">

<a href="#portfolio-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-port" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

</form>

<div id="portfolio-<?= $article['id']; ?>" class="modal">
<img height="500" width="100%" src="<?= $article['image']; ?>">
<div class="modal-content">
<form method="post" class="col s12">

<div class="row">
<div class="input-field col s6">
<input name="titre" value="<?= $article['titre']; ?>" id="titre" type="text" class="validate">
<label for="titre">Titre</label>
</div>

<div class="input-field col s6">
<select name="type">
<option value="<?= $article['type']; ?>" disabled selected><?= $article['type']; ?></option>
<option value="plugins">Plugins</option>
<option value="vitrine">Vitrine</option>
<option value="cms">CMS</option>
</select>
<label>Type</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<input name="image" value="<?= $article['image']; ?>" id="image" type="text" class="validate">
<label for="image">Image</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="port-desc" class="materialize-textarea ckeditor"><?= $article['description']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="port-desc-en" class="materialize-textarea ckeditor"><?= $article['desc_en']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="port-desc-it" class="materialize-textarea ckeditor"><?= $article['desc_it']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<input name="lien" value="<?= $article['lien']; ?>" id="lien" type="text" class="validate">
<label for="lien">Lien</label>
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-port">Modifier
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
