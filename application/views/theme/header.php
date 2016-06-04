<!DOCTYPE html>
<html lang="fr">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<title><?= $titre ?> - Conceptcub</title>
		<link rel="icon" type="image/png" href="<?=img_url()?>favicon.png" />
		<?=css('main.css')?>
		<?=css('unslider.css')?>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
	</head>

	<body class="body">
	
		<header>
			
			<a href="<?= base_url(); ?>">
				<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1049.7 313.9">
					<style>
				    	.st0{fill:#339999;}
				    	.st1{fill:#ffffff;}
					</style>
					<path class="st0" d="M77.8.9H360v282.2H77.8z"/>
					<path class="st0" d="M360 284H77.8c-.5 0-.9-.4-.9-.9V.9c0-.5.4-.9.9-.9H360c.5 0 .9.4.9.9v282.2c0 .5-.4.9-.9.9zm-281.3-1.8h280.4V1.8H78.7v280.4z"/>
				  <path class="st1" d="M284 313.9H1.8c-1 0-1.8-.8-1.8-1.8V29.9c0-1 .8-1.8 1.8-1.8H284c1 0 1.8.8 1.8 1.8v282.2c.1 1-.8 1.8-1.8 1.8zM3.6 310.3h278.6V31.7H3.6v278.6z"/>
				  <path class="st1" d="M448.4 223.4H166.1c-1 0-1.8-.8-1.8-1.8V80.5c0-1 .8-1.8 1.8-1.8h282.2c1 0 1.8.8 1.8 1.8v141.1c.1 1-.7 1.8-1.7 1.8zm-280.5-3.6h278.6V82.3H167.9v137.5zM497.3 174.8c0-24.6 11.2-37 33.7-37 5 0 9.5.7 13.7 2.1 4.1 1.4 6.2 2.9 6.2 4.3 0 1-.4 2.2-1.3 3.7s-1.6 2.3-2.2 2.3c-.1 0-.9-.4-2.2-1.1-1.4-.8-3.3-1.5-5.8-2.3-2.5-.8-5.2-1.1-8.1-1.1-8.4 0-14.5 2.3-18.5 7-3.9 4.6-5.9 12-5.9 22.1 0 10.1 2 17.4 5.9 22.1 3.9 4.7 10 7 18.1 7 3.1 0 6.1-.4 8.8-1.3 2.8-.9 4.9-1.7 6.4-2.6 1.5-.9 2.4-1.3 2.6-1.3.6 0 1.4.8 2.3 2.3.9 1.5 1.4 2.6 1.4 3.3 0 1.6-2.2 3.2-6.5 4.9-4.3 1.7-9.3 2.5-15 2.5-11.4 0-19.9-3-25.3-9-5.6-5.9-8.3-15.2-8.3-27.9zM585.4 211.8c-7.8 0-13.7-2.4-17.9-7.1-4.1-4.7-6.2-11.5-6.2-20.5s2.1-15.9 6.2-20.7c4.2-4.8 10.1-7.3 17.8-7.3 7.7 0 13.6 2.4 17.6 7.2 4 4.8 6.1 11.7 6.1 20.8 0 9-2 15.9-6 20.6-3.9 4.6-9.8 7-17.6 7zm-11.3-12.5c2.4 3.3 6.1 4.9 11.1 4.9 5.1 0 8.8-1.6 11.2-4.9 2.4-3.3 3.6-8.4 3.6-15.3s-1.2-12-3.6-15.4c-2.4-3.3-6.2-5-11.2-5-5.1 0-8.8 1.6-11.1 4.9-2.4 3.3-3.5 8.4-3.5 15.4-.1 7 1.1 12.2 3.5 15.4zM623.7 209.1v-36.5c0-4.2-.2-7.2-.5-9-.5-2.5-.7-3.8-.7-4 0-.8.7-1.4 2-1.8 1.3-.4 2.3-.6 3.1-.6.7 0 1.2.1 1.5.2.3.1.5.4.8.7l.6.9c.1.3.3.7.4 1.2.1.5.3.9.4 1.2.1.3.2.8.3 1.3.1.6.2 1 .3 1.2 4.6-5.2 9.8-7.8 15.5-7.8 5.7 0 10.1 1.5 13.1 4.5s4.5 7.1 4.5 12.4v36c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8 0-4.2-.8-4.2-2.3v-35.2c0-3.2-.9-5.7-2.8-7.4-1.8-1.8-4.5-2.6-7.8-2.6-5 0-9.3 2.4-13.1 7.3v38c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8-.1-4.2-.8-4.2-2.3zM678 183.7c0-5.2.7-9.7 2.1-13.4 1.4-3.7 3.3-6.6 5.8-8.6 4.6-3.7 10.1-5.5 16.7-5.5 4 0 7.6.5 10.8 1.5 3.2 1 4.8 2.1 4.8 3.3 0 .9-.4 2.1-1.2 3.5-.8 1.4-1.5 2.1-2.1 2.1-.1 0-.2 0-.4-.1s-.3-.1-.4-.2c-.1 0-.2-.1-.4-.2-3.7-1.7-7.5-2.5-11.3-2.5-10 0-15.1 6.6-15.1 19.8 0 7.3 1.2 12.6 3.7 15.9 2.5 3.3 6.6 4.9 12.4 4.9 4.2 0 8.1-.9 11.7-2.7.2-.1.4-.2.7-.3.2-.1.4-.2.5-.2.7 0 1.5.7 2.3 2 .8 1.3 1.2 2.4 1.2 3.3 0 1.2-1.6 2.4-4.9 3.6-3.3 1.1-7.1 1.7-11.4 1.7-8.6 0-15-2.2-19.2-6.7-4.2-4.2-6.3-11.4-6.3-21.2zM735 205c-4.2-4.5-6.2-11.4-6.2-20.6 0-9.2 2-16.2 6.1-21 4.1-4.8 9.9-7.2 17.4-7.2 14.7 0 22 9 22 27.1 0 .6-.4 1.5-1.2 2.6-.8 1.1-1.6 1.7-2.2 1.7h-32.8c.4 5.7 1.9 10 4.5 12.7 2.6 2.7 6.4 4 11.5 4 4.7 0 9-1.1 13-3.3 1.3-.7 2-1 2.2-1 .7 0 1.5.7 2.3 2.1.9 1.4 1.3 2.4 1.3 3.1 0 1.4-1.9 2.8-5.7 4.4-3.8 1.5-8.1 2.3-13 2.3-8.7-.1-15.1-2.4-19.2-6.9zm30.1-24.9c0-10.9-4.2-16.4-12.5-16.4-8.9 0-13.8 5.5-14.5 16.4h27zM796.6 230.5c0 1.5-1.4 2.3-4.2 2.3h-.4c-2.8 0-4.2-.8-4.2-2.3v-57.9c0-4.2-.2-7.2-.5-9-.5-2.5-.7-3.8-.7-4 0-.8.7-1.4 2-1.8 1.3-.4 2.3-.6 3.1-.6.7 0 1.2.1 1.5.2.3.1.5.4.8.7l.6.9c.1.3.3.7.4 1.2.1.5.3.9.4 1.2.1.3.2.8.3 1.3.1.6.2 1 .3 1.2 5-5.2 10.5-7.8 16.6-7.8 6.1 0 11 2.6 14.6 7.7 3.6 5.1 5.5 11.7 5.5 19.7v.9c0 8.5-1.9 15.2-5.8 20-3.9 4.8-8.7 7.2-14.5 7.2-5.8 0-11-1.8-15.6-5.3v24.2zm12.6-26.4h.6c4.4-.1 7.8-1.8 10.1-5.1s3.5-8.2 3.5-14.6-1.1-11.5-3.3-15.1c-2.2-3.6-5.6-5.5-10.1-5.5s-9 2.4-13.3 7.2v28.5c3.7 3 7.9 4.6 12.5 4.6zM849.6 197.4v-33.1h-5.2c-1.4 0-2.1-1-2.1-3.1V160c0-2.1.7-3.1 2.1-3.1h5.2l1.2-10.9c.1-1.5 1.2-2.3 3.3-2.3h1c2.1 0 3.1.8 3.1 2.3v10.9h8.7c1.4 0 2.1 1 2.1 3.1v1.2c0 2.1-.7 3.1-2.1 3.1h-8.7v32.3c0 5.1 1.9 7.7 5.6 7.7 1.2 0 2.2-.1 3-.3.8-.2 1.3-.3 1.5-.3.6 0 1.1.6 1.6 1.9.4 1.3.6 2.3.6 3 0 2.1-2.5 3.1-7.6 3.1-3.5 0-6.6-1.1-9.3-3.2-2.6-2-4-5.7-4-11.1zM879.9 174.8c0-24.6 11.2-37 33.7-37 5 0 9.5.7 13.7 2.1 4.1 1.4 6.2 2.9 6.2 4.3 0 1-.4 2.2-1.3 3.7s-1.6 2.3-2.2 2.3c-.1 0-.9-.4-2.2-1.1-1.4-.8-3.3-1.5-5.8-2.3-2.5-.8-5.2-1.1-8.1-1.1-8.4 0-14.5 2.3-18.5 7-3.9 4.6-5.9 12-5.9 22.1 0 10.1 2 17.4 5.9 22.1 3.9 4.7 10 7 18.1 7 3.1 0 6.1-.4 8.8-1.3 2.8-.9 4.9-1.7 6.4-2.6 1.5-.9 2.4-1.3 2.6-1.3.6 0 1.4.8 2.3 2.3.9 1.5 1.4 2.6 1.4 3.3 0 1.6-2.2 3.2-6.5 4.9-4.3 1.7-9.3 2.5-15 2.5-11.4 0-19.9-3-25.3-9-5.5-5.9-8.3-15.2-8.3-27.9zM946.1 194.9v-36c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3v35.2c0 3.2.9 5.7 2.8 7.4 1.8 1.8 4.4 2.7 7.8 2.7 5 0 9.3-2.4 13.1-7.3v-38c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3v36.9c0 4.2.2 7.2.5 9 .5 2.6.7 3.9.7 4.1 0 .8-.7 1.4-2 1.8-1.3.4-2.3.6-3.1.6-.7 0-1.2-.1-1.5-.2-.3-.1-.5-.4-.8-.7-.2-.3-.4-.7-.6-1-.1-.3-.3-.7-.4-1.3-.1-.6-.3-1-.4-1.3-.1-.3-.2-.8-.3-1.5-.1-.7-.2-1.1-.3-1.3-4.6 5.2-9.8 7.8-15.5 7.8s-10.1-1.5-13.1-4.5-4.5-7.1-4.5-12.4zM1005 209.1v-73.7c0-1.5 1.4-2.3 4.2-2.3h.4c2.8 0 4.2.8 4.2 2.3v26.2c4.6-3.5 9.8-5.3 15.6-5.3 5.8 0 10.7 2.4 14.5 7.2 3.9 4.8 5.8 11.5 5.8 20v.9c0 8-1.8 14.6-5.5 19.7-3.6 5.1-8.5 7.7-14.6 7.7s-11.6-2.6-16.6-7.8l-1.7 6.1c-.3.8-1.3 1.2-2.8 1.2h-.4c-2.1 0-3.1-.7-3.1-2.2zm8.7-12.1c4.4 4.8 8.8 7.2 13.4 7.2 8.9 0 13.4-7 13.4-21 0-6.2-1.2-10.9-3.5-14.2-2.3-3.3-5.7-5-10.1-5.1h-.6c-4.6 0-8.8 1.6-12.6 4.7V197z"/>
				</svg>
			</a>

			<nav>
				<ul>
					<a href="<?= base_url() ?>"><li class="<?php if($this->uri->segment(1)==""){echo "active";}?>">Accueil</li></a>
					<?php foreach ($produits as $produit): ?>

					<?php
						$produit_url = $produit['url'];
					?>

						<a href="<?= base_url("produit/$produit_url") ?>"><li class="<?php if($this->uri->segment(2)=="$produit_url"){echo "active";}?>"><?= $produit['nom'] ?></li></a>

					<?php endforeach; ?>
					<a href=""><li>Concept</li></a>
					<a href=""><li>Blog</li></a>
					<a href="<?= base_url("contact") ?>"><li class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>">Contact</li></a>
				</ul>
			</nav>

		</header>