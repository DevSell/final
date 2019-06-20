<div id="eduandex">

	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
					<h2>scolarité</h2>
						<div class="reflection-text">
							<p>
								Études
							</p>
						</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="main-timeline5">

<?php
    $scolarites = $bdd->prepare('SELECT * FROM alpha_scolarite WHERE nom_utilisateur = :nom_utilisateur ORDER BY id ASC');
    $scolarites->execute([
                         'nom_utilisateur' => "Hadil"
                         ]);
    while($scolarite = $scolarites->fetch()) {
        
        ?>
					<div class="timeline">
						<div class="timeline-icon"><span class="year"><?= $scolarite['dates']; ?></span></div>
						<div class="timeline-content">
							<h3 class="title"><?= $scolarite['diplome']; ?></h3>
							<p class="description">
							<?= $scolarite['description']; ?>
							</p>
						</div>
					</div>
<?php } ?>



				</div>
			</div>
		</div>
	</div>
</div>
