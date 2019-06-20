<li>
<div class="collapsible-header"><i class="material-icons">call_to_action</i>Articles</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_articles WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                       'nom_utilisateur' => $session
                       ]);
    while($article = $articles->fetch()) {
        ?>
<li class="collection-item avatar">
<img src="<?= $article['background']; ?>" alt="" class="circle">
<span class="title"><?= utf8_encode($article['titre']); ?></span>
<p><?= utf8_encode($article['description']); ?></p>

<form method="post">
<div class="secondary-content">

<a href="#article-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-art" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

<div id="article-<?= $article['id']; ?>" class="modal">

</form>


<div class="modal-content">
<center><img width="100%" height="400" src="<?= $article['background']; ?>"></center>
<br><br><br>

<form method="post" class="col s12">
<div class="row">

<div class="input-field col s6">
<input name="titre" value="<?= htmlspecialchars($article['titre']); ?>" id="titre" type="text" class="validate" required>
<label for="titre">Titre</label>
</div>

<div class="input-field col s6">
<input name="description" value="<?= htmlspecialchars($article['description']); ?>" id="description" type="text" class="validate" required>
<label for="description">Description</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<textarea name="contenu" class="materialize-textarea ckeditor"><?= $article['contenu']; ?></textarea>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<input name="background" value="<?= $article['background']; ?>" id="background" type="text" class="validate" required>
<label for="background">Image</label>
</div>

<div class="input-field col s6">
<input name="auteur" value="<?= $article['auteur']; ?>" id="auteur" type="text" class="validate" readonly>
<label for="auteur">Auteur</label>
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

</div>
<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-article">Modifier
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
