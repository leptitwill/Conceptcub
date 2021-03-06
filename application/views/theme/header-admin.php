<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title><?= $titre ?> - Conceptcub</title>
		<link rel="icon" type="image/png" href="<?=img_url()?>favicon.png" />
		<?=css('main.css')?>
		<?=css('sweetalert.css')?>
		<?=css('unslider.css')?>
		<?=js('jquery.min.js')?>
	</head>

	<body class="body_admin">

		<header class="connexion_header">

			<a href="<?= base_url('admin'); ?>">
				<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="208.7 112.9 1058.2 326">
					<style>
						.st0{fill:#FFFFFF;}
					</style>
					<path class="st0" d="M289.5 113.8h293.1v293.1H289.5z"/>
					<path class="st0" d="M582.6 407.9H289.5c-.5 0-.9-.4-.9-.9V113.8c0-.5.4-.9.9-.9h293.1c.5 0 .9.4.9.9v293.1c.1.6-.3 1-.9 1zM290.4 406h291.3V114.7H290.4V406z"/>
					<path class="st0" d="M503.7 438.9H210.6c-1 0-1.9-.8-1.9-1.9V143.9c0-1 .8-1.9 1.9-1.9h293.1c1 0 1.9.8 1.9 1.9V437c0 1-.8 1.9-1.9 1.9zm-291.2-3.8h289.4V145.8H212.5v289.3z"/>
					<path class="st0" d="M674.4 344.9H381.2c-1 0-1.9-.8-1.9-1.9V196.5c0-1 .8-1.9 1.9-1.9h293.1c1 0 1.9.8 1.9 1.9V343c.1 1.1-.8 1.9-1.8 1.9zm-291.3-3.7h289.4V198.4H383.1v142.8z"/>
					<g>
						<path class="st0" d="M714.6 301.3c0-24.6 11.2-37 33.7-37 5 0 9.5.7 13.7 2.1 4.1 1.4 6.2 2.9 6.2 4.3 0 1-.4 2.2-1.3 3.7s-1.6 2.3-2.2 2.3c-.1 0-.9-.4-2.2-1.1-1.4-.8-3.3-1.5-5.8-2.3-2.5-.8-5.2-1.1-8.1-1.1-8.4 0-14.5 2.3-18.5 7-3.9 4.6-5.9 12-5.9 22.1 0 10.1 2 17.4 5.9 22.1 3.9 4.7 10 7 18.1 7 3.1 0 6.1-.4 8.8-1.3 2.8-.9 4.9-1.7 6.4-2.6 1.5-.9 2.4-1.3 2.6-1.3.6 0 1.4.8 2.3 2.3.9 1.5 1.4 2.6 1.4 3.3 0 1.6-2.2 3.2-6.5 4.9-4.3 1.7-9.3 2.5-15 2.5-11.4 0-19.9-3-25.3-9-5.6-5.9-8.3-15.3-8.3-27.9zM802.7 338.2c-7.8 0-13.7-2.4-17.9-7.1-4.1-4.7-6.2-11.5-6.2-20.5s2.1-15.9 6.2-20.7c4.2-4.8 10.1-7.3 17.8-7.3 7.7 0 13.6 2.4 17.6 7.2 4 4.8 6.1 11.7 6.1 20.8 0 9-2 15.9-6 20.6-3.9 4.7-9.8 7-17.6 7zm-11.4-12.4c2.4 3.3 6.1 4.9 11.1 4.9 5.1 0 8.8-1.6 11.2-4.9 2.4-3.3 3.6-8.4 3.6-15.3s-1.2-12-3.6-15.4c-2.4-3.3-6.2-5-11.2-5-5.1 0-8.8 1.6-11.1 4.9-2.4 3.3-3.5 8.4-3.5 15.4s1.2 12.1 3.5 15.4zM841 335.5V299c0-4.2-.2-7.2-.5-9-.5-2.5-.7-3.8-.7-4 0-.8.7-1.4 2-1.8 1.3-.4 2.3-.6 3.1-.6.7 0 1.2.1 1.5.2.3.1.5.4.8.7l.6.9c.1.3.3.7.4 1.2.1.5.3.9.4 1.2.1.3.2.8.3 1.4.1.6.2 1 .3 1.2 4.6-5.2 9.8-7.8 15.5-7.8 5.7 0 10.1 1.5 13.1 4.5s4.5 7.1 4.5 12.4v36c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8 0-4.2-.8-4.2-2.3v-35.2c0-3.2-.9-5.7-2.8-7.4-1.8-1.8-4.5-2.6-7.8-2.6-5 0-9.3 2.4-13.1 7.3v38c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8-.1-4.2-.8-4.2-2.4zM895.3 310.2c0-5.2.7-9.7 2.1-13.4 1.4-3.7 3.3-6.6 5.8-8.6 4.6-3.7 10.1-5.5 16.7-5.5 4 0 7.6.5 10.8 1.5 3.2 1 4.8 2.1 4.8 3.3 0 .9-.4 2.1-1.2 3.5-.8 1.4-1.5 2.1-2.1 2.1-.1 0-.2 0-.4-.1s-.3-.1-.4-.2c-.1 0-.2-.1-.4-.2-3.7-1.7-7.5-2.5-11.3-2.5-10 0-15.1 6.6-15.1 19.8 0 7.3 1.2 12.6 3.7 15.9 2.5 3.3 6.6 4.9 12.4 4.9 4.2 0 8.1-.9 11.7-2.7.2-.1.4-.2.7-.3.2-.1.4-.2.5-.2.7 0 1.5.7 2.3 2 .8 1.4 1.2 2.4 1.2 3.3 0 1.2-1.6 2.4-4.9 3.6-3.3 1.1-7.1 1.7-11.4 1.7-8.6 0-15-2.2-19.2-6.6-4.2-4.3-6.3-11.5-6.3-21.3zM952.2 331.5c-4.2-4.5-6.2-11.4-6.2-20.6 0-9.2 2-16.2 6.1-21 4.1-4.8 9.9-7.2 17.4-7.2 14.7 0 22 9 22 27.1 0 .6-.4 1.5-1.2 2.6-.8 1.1-1.6 1.7-2.2 1.7h-32.8c.4 5.8 1.9 10 4.5 12.7 2.6 2.7 6.4 4 11.5 4 4.7 0 9-1.1 13-3.3 1.3-.7 2-1 2.2-1 .7 0 1.5.7 2.3 2.1.9 1.4 1.3 2.4 1.3 3.1 0 1.4-1.9 2.8-5.7 4.4-3.8 1.5-8.1 2.3-13 2.3-8.6-.2-15-2.4-19.2-6.9zm30.1-24.9c0-10.9-4.2-16.4-12.5-16.4-8.9 0-13.8 5.5-14.5 16.4h27zM1013.9 356.9c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8 0-4.2-.8-4.2-2.3V299c0-4.2-.2-7.2-.5-9-.5-2.5-.7-3.8-.7-4 0-.8.7-1.4 2-1.8 1.3-.4 2.3-.6 3.1-.6s1.2.1 1.5.2c.3.1.5.4.8.7l.6.9c.1.3.3.7.4 1.2s.3.9.4 1.2c.1.3.2.8.3 1.4.1.6.2 1 .3 1.2 5-5.2 10.5-7.8 16.6-7.8 6.1 0 11 2.6 14.6 7.7 3.6 5.1 5.5 11.7 5.5 19.7v.9c0 8.5-1.9 15.2-5.8 20-3.9 4.8-8.7 7.2-14.5 7.2-5.8 0-11-1.8-15.6-5.3l-.2 24.1zm12.6-26.3h.6c4.4-.1 7.8-1.8 10.1-5.1s3.5-8.2 3.5-14.6-1.1-11.5-3.3-15.1c-2.2-3.6-5.6-5.5-10.1-5.5s-9 2.4-13.3 7.2V326c3.6 3 7.8 4.6 12.5 4.6zM1066.9 323.9v-33.1h-5.2c-1.4 0-2.1-1-2.1-3.1v-1.2c0-2.1.7-3.1 2.1-3.1h5.2l1.2-10.9c.1-1.5 1.2-2.3 3.3-2.3h1c2.1 0 3.1.8 3.1 2.3v10.9h8.7c1.4 0 2.1 1 2.1 3.1v1.2c0 2.1-.7 3.1-2.1 3.1h-8.7v32.3c0 5.1 1.9 7.7 5.6 7.7 1.2 0 2.2-.1 3-.3.8-.2 1.3-.3 1.5-.3.6 0 1.1.6 1.6 1.9.4 1.3.6 2.3.6 3 0 2.1-2.5 3.1-7.6 3.1-3.5 0-6.6-1.1-9.3-3.2-2.7-2-4-5.8-4-11.1zM1097.2 301.3c0-24.6 11.2-37 33.7-37 5 0 9.5.7 13.7 2.1 4.1 1.4 6.2 2.9 6.2 4.3 0 1-.4 2.2-1.3 3.7s-1.6 2.3-2.2 2.3c-.1 0-.9-.4-2.2-1.1-1.4-.8-3.3-1.5-5.8-2.3-2.5-.8-5.2-1.1-8.1-1.1-8.4 0-14.5 2.3-18.5 7-3.9 4.6-5.9 12-5.9 22.1 0 10.1 2 17.4 5.9 22.1 3.9 4.7 10 7 18.1 7 3.1 0 6.1-.4 8.8-1.3 2.8-.9 4.9-1.7 6.4-2.6 1.5-.9 2.4-1.3 2.6-1.3.6 0 1.4.8 2.3 2.3.9 1.5 1.4 2.6 1.4 3.3 0 1.6-2.2 3.2-6.5 4.9-4.3 1.7-9.3 2.5-15 2.5-11.4 0-19.9-3-25.3-9-5.6-5.9-8.3-15.3-8.3-27.9zM1163.4 321.4v-36c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3v35.2c0 3.2.9 5.7 2.8 7.4 1.8 1.8 4.4 2.6 7.8 2.6 5 0 9.3-2.4 13.1-7.3v-38c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3v36.9c0 4.2.2 7.2.5 9 .5 2.6.7 3.9.7 4.1 0 .8-.7 1.4-2 1.8-1.3.4-2.3.6-3.1.6-.7 0-1.2-.1-1.5-.2-.3-.1-.5-.4-.8-.7-.2-.3-.4-.7-.6-1-.1-.3-.3-.7-.4-1.3-.1-.6-.3-1-.4-1.3-.1-.3-.2-.8-.3-1.5-.1-.7-.2-1.1-.3-1.3-4.6 5.2-9.8 7.8-15.5 7.8s-10.1-1.5-13.1-4.5c-3-2.9-4.5-7-4.5-12.3zM1222.3 335.5v-73.7c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3V288c4.6-3.5 9.8-5.3 15.6-5.3s10.7 2.4 14.5 7.2c3.9 4.8 5.8 11.5 5.8 20v.9c0 8-1.8 14.6-5.5 19.7-3.6 5.1-8.5 7.7-14.6 7.7s-11.6-2.6-16.6-7.8l-1.7 6.1c-.3.8-1.3 1.2-2.8 1.2h-.4c-2.1.1-3.1-.6-3.1-2.2zm8.7-12c4.4 4.8 8.8 7.2 13.4 7.2 8.9 0 13.4-7 13.4-21 0-6.2-1.2-10.9-3.5-14.2-2.3-3.3-5.7-5-10.1-5.1h-.6c-4.6 0-8.8 1.6-12.6 4.7v28.4z"/>
					</g>
					<path d="M505.6 407.9h-3.5V146.1H288.5v-3.5h215.3c1 0 1.8.8 1.8 1.8v263.5z"/>
					<path d="M583.4 344.5h-202c-1 0-1.8-.8-1.8-1.8V196.5c0-1 .8-1.8 1.8-1.8h202.2v3.5H383.1V341h200.3v3.5z"/>
				</svg>
			</a>

			<nav class="connexion_nav">
				<ul>
					<a href="<?= base_url(); ?>"><li>Retourner sur le site</li></a>|
					<a href="<?= base_url("admin/logout"); ?>"><li>Se déconnecter</li></a>
				</ul>
			</nav>

		</header>

		<aside class="connexion_sidebar">
			<div class="connexion_sidebar_membre">
				<img class="connexion_sidebar_membre_photo" src="<?= img_url() ?>/membre/<?= $utilisateur[0]['photo'] ?>">
				<div class="connexion_sidebar_membre_info">
					<span class="connexion_sidebar_membre_nom"><?= $utilisateur[0]['prenom'] . ' ' . $utilisateur[0]['nom'] ?></span><br>
					<span class="connexion_sidebar_membre_role"><?= $utilisateur[0]['role'] ?></span>
				</div>

			</div>

			<ul>
				<a href="<?= base_url('admin/home-page'); ?>">
					<li class="<?php if($this->uri->segment(2)=="home-page"){echo "active";}?>">
						<span>
							<svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
								<path d="M20,20v-8h2v0L12,3L2,12v0h2v8c0,0.6,0.4,1,1,1h5v-7h4v7h5C19.6,21,20,20.6,20,20z"></path>
							</svg>
						</span>
						<span>Accueil</span>
					</li>
				</a>

				<span>
					<li id="produits" class="<?php if($this->uri->segment(2)=="produit" || $this->uri->segment(2)=="gamme" || $this->uri->segment(2)=="avantage" || $this->uri->segment(2)=="solution"){echo "active";}?>">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
							    <path d="M 6.09375 4 C 5.39375 4 4.80625 4.4 4.40625 5 L 2.1875 8.59375 C 2.0875 8.79375 2 9.2 2 9.5 L 2 20 C 2 21.1 2.9 22 4 22 L 20 22 C 21.1 22 22 21.1 22 20 L 22 16 L 22 9.5 C 22 9.2 21.9125 8.79375 21.8125 8.59375 L 19.59375 5 C 19.19375 4.4 18.60625 4 17.90625 4 L 6.09375 4 z M 5.90625 6 L 11 6 L 11 9 L 4.1875 9 L 5.90625 6 z M 13 6 L 18.09375 6 L 19.8125 9 L 13 9 L 13 6 z M 9 11 L 15 11 C 15.6 11 16 11.4 16 12 C 16 12.6 15.6 13 15 13 L 9 13 C 8.4 13 8 12.6 8 12 C 8 11.4 8.4 11 9 11 z"></path>
							</svg>
						</span>
						<span>Produits</span>
					</li>
					<li id="menu_produits" class="sous-menu" style="<?php if($this->uri->segment(2)=="produit" || $this->uri->segment(2)=="gamme" || $this->uri->segment(2)=="avantage" || $this->uri->segment(2)=="solution"){echo "display: block";}else{echo "display:none";}?>">
						<ul>
							<a href="<?= base_url('admin/produit'); ?>">
								<li class="<?php if($this->uri->segment(2)=="produit"){echo "active";}?>">
									<span>Produits</span>
								</li>
							</a>

							<a href="<?= base_url('admin/gamme'); ?>">
								<li class="<?php if($this->uri->segment(2)=="gamme"){echo "active";}?>">
									<span>Gammes</span>
								</li>
							</a>

							<a href="<?= base_url('admin/avantage'); ?>">
								<li class="<?php if($this->uri->segment(2)=="avantage"){echo "active";}?>">
									<span>Avantages</span>
								</li>
							</a>

							<a href="<?= base_url('admin/solution'); ?>">
								<li class="<?php if($this->uri->segment(2)=="solution"){echo "active";}?>">
									<span>Solutions</span>
								</li>
							</a>
						</ul>
					</li>
				</span>

				<a href="<?= base_url('admin/blog'); ?>">
					<li class="<?php if($this->uri->segment(2)=="blog"){echo "active";}?>">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
							    <path d="M 15 3 L 15 4 L 15 19.9375 L 19 17.90625 L 23 20 L 23 4 L 23 3 L 15 3 z M 11 6 C 7.636 6 5 8.636 5 12 L 5 33 C 5 36.364 7.636 39 11 39 L 12 39 L 12 47.21875 L 21.375 39 L 25.40625 39 L 40 39 C 43.364 39 46 36.364 46 33 L 46 30 L 46 12 C 46 8.636 43.364 6 40 6 L 25 6 L 25 21 L 25 22.375 L 19 30 L 13 22.375 L 13 21 L 13 6 L 11 6 z M 19 20.09375 L 15.28125 21.96875 L 17.65625 25 L 20.3125 25 L 22.65625 22 L 19 20.09375 z M 19.125 30 L 44 30 L 44 33 C 44 35.243 42.243 37 40 37 L 23.53125 37 L 19.125 30 z"></path>
							</svg>
						</span>
						<span>Blog</span>
					</li>
				</a>

				<span>
					<li id="social" class="<?php if($this->uri->segment(2)=="reseaux_sociaux" || $this->uri->segment(2)=="partenaire" || $this->uri->segment(2)=="faq" || $this->uri->segment(2)=="avis" || $this->uri->segment(2)=="email_client") {echo "active";}?>">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
 								<path d="M22,6.9v6.3c0,0-1.3,0.3-1.6,0.3c-0.3,0-1.1,0.3-1.7-0.3c-0.9-0.9-4.3-4.4-4.3-4.4S13.9,8.2,13,8.7l-1.5,0.9 C11,9.9,10.2,9.7,9.9,9.2l0,0c-0.4-0.6-0.2-1.4,0.4-1.7c1.2-0.7,3.1-1.8,3.8-2.2c0.6-0.4,1.1-0.4,2,0.4c1.1,0.9,2,1.8,2,1.8 s0.4,0.2,0.8,0.2C19.6,7.5,22,6.9,22,6.9z M9.9,17.8c-0.3-0.3-3.7-4-4-4.3c-0.4-0.5-1.1-0.4-1.7,0c-0.6,0.5-0.8,1.4-0.4,1.9 c0.4,0.5,3.5,3.8,4,4.3c0.4,0.5,1.5,0.3,2-0.2C10.3,19,10.4,18.2,9.9,17.8z M17.6,15.7c0.5-0.5,0.4-1.4-0.1-1.9 c-2.7-2.8-1.7-1.7-3.5-3.6c0,0-0.6-0.7-1.3-0.3c-0.2,0.1-0.5,0.3-0.9,0.5c-0.9,0.6-1.9,0.5-2.8-0.9C8,8.3,8.5,7.3,9.4,6.7l1.7-1.1 c0,0-0.4-0.6-1.6-0.6C8.3,5,5.8,6.8,5.8,6.8S5,7.3,4,6.9L2,6.2v7.2c0,0,0.6,0.2,1.1,0.4c0.1-0.3,0.3-0.7,0.6-0.9 c0.8-0.8,2.3-0.9,3,0c0.5,0.5,3.7,4,4,4.3c0.5,0.5,0.6,1.2,0.5,1.8C11.4,19.2,15.7,17.8,17.6,15.7z"></path>
							</svg>
						</span>
						<span>Social</span>
					</li>
					<li id="menu_social" class="sous-menu" style="<?php if($this->uri->segment(2)=="reseaux_sociaux" || $this->uri->segment(2)=="partenaire" || $this->uri->segment(2)=="faq" || $this->uri->segment(2)=="avis" || $this->uri->segment(2)=="email_client"){echo "display: block";}else{echo "display:none";}?>">
						<ul>
							<a href="<?= base_url('admin/reseaux_sociaux'); ?>">
								<li class="<?php if($this->uri->segment(2)=="reseaux_sociaux"){echo "active";}?>">
									<span>Réseaux sociaux</span>
								</li>
							</a>

							<!-- <a href="<?= base_url('admin/partenaire'); ?>">
								<li class="<?php if($this->uri->segment(2)=="partenaire"){echo "active";}?>">
									<span>Partenaires</span>
								</li>
							</a> -->

							<a href="<?= base_url('admin/faq'); ?>">
								<li class="<?php if($this->uri->segment(2)=="faq"){echo "active";}?>">
									<span>FAQ</span>
								</li>
							</a>

							<a href="<?= base_url('admin/avis'); ?>">
								<li class="<?php if($this->uri->segment(2)=="avis"){echo "active";}?>">
									<span>Avis client</span>
								</li>
							</a>

							<a href="<?= base_url('admin/email_client'); ?>">
								<li class="<?php if($this->uri->segment(2)=="email_client"){echo "active";}?>">
									<span>Email client</span>
								</li>
							</a>
						</ul>
					</li>
				</span>

				<span>
					<li id="entreprise" class="<?php if($this->uri->segment(2)=="entreprise" || $this->uri->segment(2)=="membre" || $this->uri->segment(2)=="concept" || $this->uri->segment(2)=="faq-operatoire" || $this->uri->segment(2)=="etape"){echo "active";}?>">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
							    <path d="M 7.5 5 C 5.6 5 4 6.6 4 8.5 C 4 10.4 5.6 12 7.5 12 C 9.4 12 11 10.4 11 8.5 C 11 6.6 9.4 5 7.5 5 z M 16.5 5 C 14.567003 5 13 6.5670034 13 8.5 C 13 10.432997 14.567003 12 16.5 12 C 18.432997 12 20 10.432997 20 8.5 C 20 6.5670034 18.432997 5 16.5 5 z M 7.5 14 C 2.6 14 1 18 1 18 L 1 20 L 14 20 L 14 18 C 14 18 12.4 14 7.5 14 z M 16.5 14 C 15 14 13.80625 14.40625 12.90625 14.90625 C 14.30625 16.10625 14.9 17.49375 15 17.59375 L 15.09375 17.8125 L 15.09375 20 L 23.09375 20 L 23.09375 18 C 22.99375 18 21.4 14 16.5 14 z"></path>
							</svg>
						</span>
						<span>Entreprise</span>
					</li>
					<li id="menu_entreprise" class="sous-menu" style="<?php if($this->uri->segment(2)=="entreprise" || $this->uri->segment(2)=="membre" || $this->uri->segment(2)=="concept" || $this->uri->segment(2)=="faq-operatoire" || $this->uri->segment(2)=="etape"){echo "display: block";}else{echo "display:none";}?>">
						<ul>
							<a href="<?= base_url('admin/concept'); ?>">
								<li class="<?php if($this->uri->segment(2)=="concept"){echo "active";}?>">
									<span>Concept</span>
								</li>
							</a>

							<a href="<?= base_url('admin/entreprise'); ?>">
								<li class="<?php if($this->uri->segment(2)=="entreprise"){echo "active";}?>">
									<span>Informations</span>
								</li>
							</a>

							<a href="<?= base_url('admin/membre'); ?>">
								<li class="<?php if($this->uri->segment(2)=="membre"){echo "active";}?>">
									<span>Membres</span>
								</li>
							</a>

							<a href="<?= base_url('admin/faq-operatoire'); ?>">
								<li class="<?php if($this->uri->segment(2)=="faq-operatoire"){echo "active";}?>">
									<span>Mode opératoire</span>
								</li>
							</a>

							<a href="<?= base_url('admin/etape'); ?>">
								<li class="<?php if($this->uri->segment(2)=="etape"){echo "active";}?>">
									<span>Étape clées</span>
								</li>
							</a>
						</ul>
					</li>
				</span>

				<span>
					<li id="media" class="<?php if($this->uri->segment(2)=="galerie"){echo "active";}?>">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							    <path d="M 4 4 L 4 8 L 8 8 L 8 4 L 4 4 z M 10 4 L 10 8 L 14 8 L 14 4 L 10 4 z M 16 4 L 16 8 L 20 8 L 20 4 L 16 4 z M 4 10 L 4 14 L 8 14 L 8 10 L 4 10 z M 10 10 L 10 14 L 14 14 L 14 10 L 10 10 z M 16 10 L 16 14 L 20 14 L 20 10 L 16 10 z M 4 16 L 4 20 L 8 20 L 8 16 L 4 16 z M 10 16 L 10 20 L 14 20 L 14 16 L 10 16 z M 16 16 L 16 20 L 20 20 L 20 16 L 16 16 z"></path>
							</svg>
						</span>
						<span>Média</span>
					</li>
					<li id="menu_media" class="sous-menu" style="<?php if($this->uri->segment(2)=="galerie"){echo "display: block";}else{echo "display:none";}?>">
						<ul>
							<a href="<?= base_url('admin/galerie'); ?>">
								<li class="<?php if($this->uri->segment(2)=="galerie"){echo "active";}?>">
									<span>Galeries</span>
								</li>
							</a>
						</ul>
					</li>
				</span>
			</ul>
		</aside>
