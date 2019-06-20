<section id="blog" class="all_blogs blogs">
	<div class="container">

		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h2>News</h2>
					<div class="reflection-text">
						<p>
							Dernières News
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

<?php
    $articles = $bdd->prepare('SELECT * FROM alpha_articles WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $articles->execute([
                         'nom_utilisateur' => "Hadil"
                         ]);
    while($article = $articles->fetch()) {
        ?>
			<div class="col-md-4 col-sm-6">
				<div class="blog-box">
					<div class="blog-images">
						<a href="#">
							<img src="<?= $article['background']; ?>" class="img-fluid" alt="<?= $article['titre']; ?>">
						</a>
					</div>

					<div class="blog-details">
						<h3>
							<?= $article['titre']; ?>
						</h3>

						<ul class="list-inline meta">

							<li>
								<a href="#">
								<i class="fa fa-user"></i>
								Hadil F.
								</a>
							</li>

						</ul>

						<p><?= $article['description']; ?></p>
					</div>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
</section>
