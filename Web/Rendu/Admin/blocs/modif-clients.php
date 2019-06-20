
<li>
    <div class="collapsible-header"><i class="material-icons">group</i>Clients</div>
    <div class="collapsible-body">
        <span>
            <ul class="collection">
                <?php
                    $articles = $bdd->prepare('SELECT * FROM alpha_clients WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
                    $articles->execute([
                                       'nom_utilisateur' => $session
                                       ]);
                    while($article = $articles->fetch()) {
                        ?>
                <li class="collection-item avatar">
                    <img src="<?= $article['image']; ?>" alt="" class="circle">
                    <span class="title"><?= $article['lien']; ?></span>

                    <form method="post">
                    <div class="secondary-content">

                    <a href="#clients-<?= $article['id']; ?>" class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="left" data-tooltip="Modifier" modal-trigger><i class="material-icons">edit</i></a>

                    <input name="id_article" type="hidden" value="<?= $article['id']; ?>">
                    <button name="suppr-cli" class="waves-effect waves-light btn red tooltipped" type="submit" data-position="right" data-tooltip="Supprimer"><i class="material-icons">delete</i></button>

                    <div id="clients-<?= $article['id']; ?>" class="modal">
                    </form>

                    <div class="modal-content">
                    <center><img src="<?= $article['image']; ?>"></center>
                    <br><br><br>
                    <form method="post" class="col s12">

                    <div class="row">
                    <div class="input-field col s6">
                    <input name="lien" value="<?= $article['lien']; ?>" id="lien" type="text" class="validate">
                    <label for="lien">Lien</label>
                    </div>

                    <div class="input-field col s6">
                    <input name="image" value="<?= $article['image']; ?>" id="image" type="text" class="validate">
                    <label for="image">Image</label>
                    </div>
                    </div>

                    <input name="id_article" type="hidden" value="<?= $article['id']; ?>">

                    <div class="modal-footer">
                    <button class="btn green waves-effect waves-light btn-large" type="submit" name="modif-client">Modifier
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
