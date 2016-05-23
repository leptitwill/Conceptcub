		<section class="content-admin">

			<h1 class="titre"><?= $titre ?><br><span>Pour modifier le contenu cliquez sur les paragraphes</span></h1>

			<div style="background: white">

				<section class="cover--home my-slider">
					<ul>
						<li class="cover--home" style="background-image: url('<?=img_url()?>cover-1.jpg')">
							<div class="cover_texte">
								<h3>Nos bureau de jardin</h3><br>
								<span>Super facile d'utilisation et trés beau.</span>
							</div>
						</li>
						<li class="cover--home" style="background-image: url('<?=img_url()?>cover-2.jpg')">
							<div class="cover_texte">
								<h3>Nos studio de jardin</h3><br>
								<span>Super facile d'utilisation et trés beau.</span>
							</div>
						</li>
						<li class="cover--home" style="background-image: url('<?=img_url()?>cover-3.jpg')">
							<div class="cover_texte">
								<h3>Voyager au Canada</h3><br>
								<span>Super facile d'utilisation et trés beau.</span>
							</div>
						</li>
					</ul>
				</section>

				<form onsubmit= "majAccueil('introduction')">
					<section id="introduction" class="accueil_introduction tiny-inline">
						
						<?= $accueil[0]['introduction'] ?>

					</section>
					<button hidden="hidden" name="submitbtn"></button>
				</form>

				<form onsubmit= "majAccueil('baseline')">
					<section id="baseline" class="accueil_baseline tiny-inline">
						
						<div class="overlay">
							<?= $accueil[0]['baseline'] ?>
						</div>

					</section>
					<button hidden="hidden" name="submitbtn"></button>
				</form>

				<section class="accueil_produits">

					<?php foreach ($produits as $produit): ?>

						<?php
							$produit_url = $produit['url'];
						?>

						<article class="accueil_produit">

							<div class="accueil_produit_contenu">
								<div class="accueil_produit_photo" style="background-image: url('<?=img_url()?>produit/<?= $produit['couverture'] ?>')"></div>
								<div class="accueil_produit_info">
									<h3 class="accueil_produit_nom"><?= $produit['nom'] ?></h3>
									<div class="accueil_produit_description"><?= $produit['description'] ?></div>	
								</div>
							</div>
							<div class="accueil_produit_atout">
								<?php foreach ($avantages as $avantage): ?>	
									<div class="atout">
										<div>
											<img src="<?=img_url()?>avantage/<?= $avantage['icone'] ?>">
											<p class="atout_nom"><?= $avantage['nom'] ?></p>
											<p class="atout_description"><?= $avantage['description'] ?></p>
										</div>
										
									</div>
								<?php endforeach ?>	

								<a href="<?= base_url("produit/$produit_url") ?>" class="atout">
									<div>
										<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-454 256 50 50" style="enable-background:new -454 256 50 50;" xml:space="preserve">
											<path d="M-406,256h-30c-0.6,0-1,0.5-1,1v10h2.1v-9h27.9V304H-435v-9h-2.1v10c0,0.6,0.5,1,1,1h30c0.6,0,1-0.5,1-1v-48
											c0-0.5-0.3-0.9-0.8-1C-405.9,256-405.9,256-406,256z M-429.7,271.4c-0.4,0.4-0.4,1,0,1.4l7.2,7.2H-452c0,0,0,0,0,0c-0.6,0-1,0.5-1,1
											c0,0.6,0.5,1,1,1h29.6l-7.2,7.2c-0.1,0-0.1,0.1-0.2,0.2c-0.3,0.4-0.3,1.1,0.2,1.4c0.4,0.3,1.1,0.3,1.4-0.2l8.9-8.9l0.7-0.7l-0.7-0.7
											l-8.9-8.9c-0.2-0.2-0.4-0.3-0.6-0.3C-429.1,271.1-429.4,271.2-429.7,271.4z"/>
										</svg>
										<p>Voir le produit</p>	
									</div>
								</a>
							</div>
						</article>
					
					<?php endforeach; ?>

				</section>

				<section class="accueil_etapes">
						
					<h2>Les étapes clées pour mener à bien votre projet</h2>

					<div class="accueil_etape">
						<span>Étape n°</span><br>
						<p class="number">01<span>.</span></p>
						<p class="accueil_etape_texte">
							<span class="etape_titre">PREMIER RENDEZ-VOUS TELEPHONIQUE</span><br><br>
							<span class="etape_contenu">En fonction de la superficie de votre terrain, vous serez conseillés sur le choix du modèle de bureau ou de studio de jardin ainsi que sur les diffé- rentes options possibles.</span>
						</p>
					</div>

					<div class="accueil_etape">
						<span>Étape n°</span><br>
						<p class="number">02<span>.</span></p>
						<p class="accueil_etape_texte">
							<span class="etape_titre">PREMIER RENDEZ-VOUS TELEPHONIQUE</span><br><br>
							<span class="etape_contenu">En fonction de la superficie de votre terrain, vous serez conseillés sur le choix du modèle de bureau ou de studio de jardin ainsi que sur les diffé- rentes options possibles.</span>
						</p>
					</div>

					<div class="accueil_etape">
						<span>Étape n°</span><br>
						<p class="number">03<span>.</span></p>
						<p class="accueil_etape_texte">
							<span class="etape_titre">PREMIER RENDEZ-VOUS TELEPHONIQUE</span><br><br>
							<span class="etape_contenu">En fonction de la superficie de votre terrain, vous serez conseillés sur le choix du modèle de bureau ou de studio de jardin ainsi que sur les diffé- rentes options possibles.</span>
						</p>
					</div>

					<div class="accueil_etape">
						<span>Étape n°</span><br>
						<p class="number">04<span>.</span></p>
						<p class="accueil_etape_texte">
							<span class="etape_titre">PREMIER RENDEZ-VOUS TELEPHONIQUE</span><br><br>
							<span class="etape_contenu">En fonction de la superficie de votre terrain, vous serez conseillés sur le choix du modèle de bureau ou de studio de jardin ainsi que sur les diffé- rentes options possibles.</span>
						</p>
					</div>

				</section>

				<section class="accueil_validation">

					<p>
					Une fois le feu vert de la Marie et le délai de recours des tiers passé, la fabrication est alors lancé.
					Un contrat sera signé entre les 2 parties dans le but de clarifier les étapes à venir et les obligations de chacun.
					</p>

				</section>

				<section class="accueil_avis">

					<div class="overlay">

						<h2>Les avis clients</h2>

						<div class="my-slider">
							<ul>
								<li>
									<blockquote><p>On est pas bien ? paisibles, à la fraiche, décontractés du gland. … et on bandera quand on aura envie de bander</p></blockquote><br>
									<span>Les valseuses</span>
								</li>
								<li>
									<blockquote><p>La capote, c’est le soulier de verre de notre génération. On l’enfile quand on rencontre une inconnue, on danse toute la nuit, et puis on la balance</p></blockquote><br>
									<span>Fight Club</span>
								</li>
								<li>
									<blockquote><p>Tu vois, le monde se divise en deux catégories: ceux qui ont un pistolet chargé et ceux qui creusent. Toi tu creuses</p></blockquote><br>
									<span>Le bon, la brute et le truand</span>
								</li>
							</ul>
						</div>
						
					</div>

				</section>

				<section class="accueil_articles">

					<h2>Les derniers articles</h2>
					
					<div class="accueil_article">
						<div class="accueil_article_photo" style="background-image: url('<?=img_url()?>blog/article-1.jpg');"></div>
						<p class="accueil_article_titre">American Gothic</p>
						<p class="accueil_article_description">
							American Gothic est un tableau de Grant Wood faisant partie de la collection de l'Institut d'art de Chicago. Wood a été inspiré par un chalet conçu dans le style néogothique avec une fenêtre supérieure distinctive.
						</p>
						<a  class="accueil_article_lien" href="#">Lire plus</a>
					</div>

					<div class="accueil_article">
						<div class="accueil_article_photo" style="background-image: url('<?=img_url()?>blog/article-2.jpg');"></div>
						<p class="accueil_article_titre">Le Désespéré</p>
						<p class="accueil_article_description">
							Le Désespéré est un tableau du peintre français Gustave Courbet réalisé entre 1843 et 1845. C'est un autoportrait de l'artiste sous les traits d'un jeune homme grand, beau et brun qui regarde avec désespoir vers moi. 							
						</p>
						<a  class="accueil_article_lien" href="#">Lire plus</a>
					</div>

					<div class="accueil_article">
						<div class="accueil_article_photo" style="background-image: url('<?=img_url()?>blog/article-3.jpg');"></div>
						<p class="accueil_article_titre">La nevada</p>
						<p class="accueil_article_description">
							La nevada ou El invierno est une peinture réalisée par Francisco de Goya en 1786 et faisant partie de la cinquième série des cartons pour tapisserie destinée à la salle à manger du Prince des Asturies au Palais du Pardo.
						</p>
						<a  class="accueil_article_lien" href="#">Lire plus</a>
					</div>

				</section>

				<footer>

					<div class="footer_bloc">
						<ul class="texte">
							<li>Horaires</li>
							<li>Du lundi au vendredi</li>
							<li>9:00 - 12:00 - 14:00 - 18:00</li>
							<li>Samedi</li>
							<li>9:00 - 12:00</li>
						</ul>
					</div>

					<div class="footer_bloc">
						<ul class="texte">
							<li>Contact</li>
							<li>59 avenue de L'Union</li>
							<li>59100 Tourcoing, France</li>
							<li>+33 6 07 50 34 86</li>
							<li>conceptcub@gmail.com</li>
						</ul>
					</div>

					<div class="footer_bloc_newsletter">
						<ul class="texte">
							<li>Newsletter</li>
							<li>Suivez notre actualitées en vous inscrivant à notre newsletter</li>
						</ul>
						<form>
							<input type="email" name="email" placeholder="Votre adresse email">
							<span>
								<button type="submit">S'inscrire</button>
							</span>
						</form>
					</div>

					<div class="footer_bloc_bas">

						<div>
							<p>© Conceptcub - Tous droits réservés</p>
						</div>

						<div>
							<ul class="footer_menu">
								<li>
									<a href="<?= base_url("produit/bureaux-de-jardin"); ?>">
										Contact
									</a>
								</li>
								<li>
									<a href="<?= base_url("faq"); ?>">
										FAQ
									</a>
								</li>
								<li>
									<a href="<?= base_url("produit/bureaux-de-jardin"); ?>">
										Mentions légales
									</a>
								</li>
								<li>
									<a href="<?= base_url("produit/bureaux-de-jardin"); ?>">
										Conditions générales
									</a>
								</li>
							</ul>
						</div>

						<div>

							<ul class="reseau_social">
								<?php foreach ($reseaux_sociaux as $reseau_social): ?>
									<?php
										$reseaux_sociaux_id = $reseau_social['idReseauxSociaux'];
									?>
										<a target="_blank" href="<?= $reseau_social['lien'] ?>">
											<li>
												<img src="<?=img_url()?>reseaux_sociaux/<?= $reseau_social['logo']; ?>">
											</li>
										</a>
								<?php endforeach; ?>
							</ul>
							
						</div>
						
					</div>
					
				</footer>

			</div>

		</section>