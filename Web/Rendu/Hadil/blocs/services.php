<div id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<div class="section-title">
						<h2>Mes services</h2>
						<div class="reflection-text">
							<p>
								Ce que je vous propose
							</p>
						</div>
					</div>
				</div>
			</div>
			<!--/.row-->

			<div class="row">
<?php
    $services = $bdd->prepare('SELECT * FROM alpha_services WHERE nom_utilisateur = :nom_utilisateur ORDER BY id DESC');
    $services->execute([
                         'nom_utilisateur' => "Hadil"
                         ]);
    while($service = $services->fetch()) {
        ?>
				<div class="col-lg-4 col-md-6">
					<div class="item">
						<img src="<?= $service['image']; ?>" alt="<?= $service['titre']; ?>">
						<h6><?= $service['titre']; ?></h6>
						<p><?= $service['description']; ?></p>
					</div>
				</div>
				 <?php } ?>

			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</div>
