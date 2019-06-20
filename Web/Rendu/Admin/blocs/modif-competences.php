
<li>
<div class="collapsible-header"><i class="material-icons">sort</i>Compétences</div>
<div class="collapsible-body">
<span>
<ul class="collection">
<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_competences WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                       'nom_utilisateur' => $session
                       ]);
    while($article = $articles->fetch()) {
        ?>
<li class="collection-item avatar">
<img src="<?= $article['background']; ?>" alt="" class="circle">
<span class="title"><?= $article['competence']; ?> (<b><?= $article['pct']; ?>%</b>)</span><br>
<div class="progress col s6">
<div class="determinate" style="width: <?= $article['pct']; ?>%"></div>
</div>

<form method="post">
<div class="secondary-content">

<a href="#competence-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">
<button name="suppr-comp" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

</form>

<div id="competence-<?= $article['id']; ?>" class="modal">
<div class="modal-content">
<form method="post" class="col s12">

<div class="row">
<div class="input-field col s12">
<input name="competence" value="<?= $article['competence']; ?>" id="competence" type="text" class="validate" required>
<label for="competence">Compétence</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
<input value="<?= $article['pct']; ?>" name="pct" type="range" id="pct" min="0" max="100" />
</div>
</div>

<input name="id_article" type="hidden" value="<?= $article['id']; ?>">

<div class="modal-footer">
<button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-competence">Modifier
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
