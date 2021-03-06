		<section class="cover" style="background-image: url('<?=img_url()?>produit/<?=$produit[0]['couverture']?>')">

			<div class="overlay">
				<div class="cover_titre">
					<h1><?= $produit[0]['titre'] ?></h1>
					<h3><?= $produit[0]['sousTitre'] ?></h3>
				</div>
			</div>

		</section>

		<section class="produit_appel">
			<div>
				<p>
				Vous avez un projet d'aménagement, vous avez des questions ?
			</p>
			<a href="<?= base_url('contact') ?>">Contactez-nous</a>
			</div>
		</section>

		<section class="content" id="produit_content">

			<section class="produit_introduction">

				<p class="uptitle">Nous vous apportons</p>
				<h2>Des réponses pratiques</h2>

				<?= nl2br($produit[0]['description']) ?>

			</section>

			<section class="produit_avantages">

				<?php foreach ($avantages as $avantage): ?>	
					<div class="produit_avantage">
						<img src="<?=img_url()?>avantage/<?= $avantage['icone'] ?>" alt="<?= $avantage['nom'] ?>" >
						<p class="produit_avantage_nom"><?= $avantage['nom'] ?></p>
						<p class="produit_avantage_description"><?= nl2br($avantage['description']) ?></p>
					</div>
				<?php endforeach ?>	

			</section>

			<hr/>

			<section class="produit_solutions">

				<p class="uptitle">A qui s'adressent</p>
				<h2>Nos solutions</h2>

				<?php foreach ($solutions as $solution): ?>	
					<div class="produit_solution">
						<img src="<?=img_url()?>solution/<?= $solution['icone'] ?>">
						<p class="produit_solution_nom"><?= $solution['nom'] ?></p>
						<p class="produit_solution_description"><?= nl2br($solution['description']) ?></p>
					</div>
				<?php endforeach ?>	

			</section>

			<hr/>

			<section class="produit_gammes">

				<div class="content">
					<p class="uptitle">Jetez un coup d'oeil à</p>
					<h2>Nos <?= $produit[0]['nom'] ?></h2>
					
					<?php foreach ($gammes as $gamme): $gamme_url = $gamme['url']; $gamme_produit = $gamme['produit_idProduit']; $produit_url = $produit[0]['url']; ?>	
						<div class="produit_gamme">
							<a href="<?= base_url("produit/$produit_url/$gamme_url") ?>">
								<div class="produit_gamme_photo" style="background-image: url('<?=img_url()?>gamme/<?= $gamme['couverture'] ?>')">
									<div class="produit_gamme_nom">
										<h3><?= $gamme['nom'] ?></h3>
									</div>
								</div>
							</a>

							<div class="produit_atout">
								<div class="atout">
									<div>
										<p><?= $gamme['atout1'] ?></p>	
									</div>
								</div>
								<div class="atout">
									<div>
										<p>Espace de <?= $gamme['taille'] ?>m²</p>	
									</div>
								</div>
								<div class="atout">
									<div>
										<p><?= $gamme['atout2'] ?></p>	
									</div>
								</div>
								<div class="atout">
									<div>
										<p>A partir de <?= $gamme['prix'] ?> € HT</p>	
									</div>
								</div>
							</div>
						</div>

					<?php endforeach ?>
				</div>

			</section>

		</section>