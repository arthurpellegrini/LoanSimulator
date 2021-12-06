<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
	<link href="../css/styles.css" rel="stylesheet" />
	<title>Projet PHP 2021</title>
</head>

<!-- NAVIGATION LIST -->

<body>
	<header>
		<ul class="nav-list">
			<li class="nav-item">
				<a href="https://www.iut-velizy-rambouillet.uvsq.fr/"><img src="../assets/img/logo_iut_velizy.png" height="40" alt="Logo de l'IUT de Vélizy." /></a>
			</li>
			<li class="nav-item"><a href="#simulation">Simulation</a></li>
			<li class="nav-item"><a href="#historique">Historique</a></li>
			<li class="nav-item"><a href="#">Readme</a></li>
			<li class="nav-item"><a href="connexion_form.php">Connexion</a></li>
		</ul>
	</header>

	<div class="title">
		<h1>Projet Php 2021</h1>
	</div>

	<div class="wrapper">
		<?php include("../php/historique.php"); ?>
		<!-- SIMULATION -->
		<div class="box1" id="simulation">
			<br>
			<h2>Simulation</h2>
			<div class="form">
				<div class="container">
					<?php include("../view/simulation_form.php"); ?>
				</div>
			</div>
		</div>


		<!-- HISTORIQUE -->
		<div class="box2" id="historique">
			<br>
			<h2>Historique</h2>
			<div class="content-table">
				<?php include("../view/historique_table.php"); ?>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<footer>
		<div class="social">
			<a href="https://github.com/arthurpellegrini/loan-simulator"><img src="../assets/img/github_logo.png" height="40" alt="Logo de Github." /></a>
		</div>

		<ul class="list">
			<li>
				<a href="#">Haut de page</a>
			</li>
			<li>
				<a href="#simulation">Simulation</a>
			</li>
			<li>
				<a href="#historique">Historique</a>
			</li>
		</ul>

		<p class="copyright">
			Copyright © Nathan Delorme - Abdouramane Gadio - Léo Meyne - Arthur Pellegrini - Balthazar Puget - 2021
		</p>
	</footer>
</body>

</html>