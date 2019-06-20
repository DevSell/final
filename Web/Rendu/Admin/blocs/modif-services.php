<li>
<div class="collapsible-header"><i class="material-icons">view_module</i>Services</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_services WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
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

<a href="#services-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-ser" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

</form>

<div id="services-<?= $article['id']; ?>" class="modal">
<br>
<center><img width="200" height="200" src="<?= $article['image']; ?>" alt=""></center>
<br>
<div class="modal-content">
<form method="post" class="col s12">



<div class="row">
<div class="input-field col s4">
<input name="image" value="<?= $article['image']; ?>" id="image" type="text" class="validate">
<label for="image">Image</label>
</div>

<div class="input-field col s4">
<input name="titre" value="<?= $article['titre']; ?>" id="titre" type="text" class="validate">
<label for="titre">Titre</label>
</div>

<div class="input-field col s4">
<input name="titre_en" value="<?= $article['titre_en']; ?>" id="titre_en" type="text" class="validate">
<label for="titre_en">Titre EN</label>
</div>

<div class="input-field col s4">
<input name="titre_it" value="<?= $article['titre_it']; ?>" id="titre_it" type="text" class="validate">
<label for="titre_it">Titre IT</label>
</div>
</div>






<div class="row">
<div class="input-field col s12">
<textarea name="ser-descri" class="materialize-textarea ckeditor"><?= $article['description']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="ser-descri-en" class="materialize-textarea ckeditor"><?= $article['description_en']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="ser-descri-it" class="materialize-textarea ckeditor"><?= $article['description_it']; ?></textarea>
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-ser">Modifier
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
