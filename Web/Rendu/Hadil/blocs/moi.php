<div id="about" class="about-area section-padding">
	<div class="container">
		<div class="row">

			<div class="col-md-5 d-flex align-self-center">
				<div class="author-image tilt" data-shadow="false" data-shine="true" data-shine-opacity="0">
					<img src="assets/img/author.jpg" alt="<?= $site['nom']; ?>">
				</div>
			</div>

			<div class="col-md-7">
				<div class="tab" role="tabpanel">

					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#Section1" role="tab" data-toggle="tab">moi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Section2" role="tab" data-toggle="tab">Compétences</a>
						</li>
					</ul>

					<div class="tab-content">

						<div role="tabpanel" class="tab-pane fade show active" id="Section1">
							<h4 class="about-heading">Hey ! Je suis <span><?= $site['nom']; ?></span></h4>
							<p>Je suis passionnée par le développement web depuis bon nombre d'années.</p>
							<p>C'est donc pour cela que j'ai choisi la voie scolaire informartisée.</p>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="Section2">

                        <?php
                            $comps_com = $bdd->prepare('SELECT * FROM alpha_competences WHERE type = :type  AND nom_utilisateur = :nom_utilisateur ORDER BY pct DESC');
                            $comps_com->execute([
                                                'type' => "Informatique",
                                                'nom_utilisateur' => "Hadil"
                                                ]);
                            while($comp_com = $comps_com->fetch()) {
                                ?>
							<div class="single-skill">
								<div class="skill-info">
									<h4><?= $comp_com['competence']; ?></h4>
								</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: <?= $comp_com['pct']; ?>%;"><span><?= $comp_com['pct']; ?>%</span></div>
								</div>
							</div>
<?php } ?>
						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
