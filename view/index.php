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
	<header class="header">
		<nav class="navbar">
			<a href="https://www.iut-velizy-rambouillet.uvsq.fr/" class="nav-logo">
				<img src="../assets/img/logo_iut_velizy.png" height="40" alt="Logo de l'IUT de Vélizy." />
			</a>
			<ul class="nav-menu">
				<li class="nav-item">
					<a href="#simulation" class="nav-link">Simulation</a>
				</li>
				<li class="nav-item">
					<a href="#historique" class="nav-link">Historique</a>
				</li>
				<li class="nav-item">
					<a href="README.html" class="nav-link">Readme</a>
				</li>
				<li class="nav-item">
					<a href="connexion_form.php" class="nav-link">Connexion</a>
				</li>
			</ul>
			<div class="hamburger">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
		</nav>
	</header>

	<div class="title">
		<h1>Projet Php 2021</h1>
	</div>

	<!-- INCLUDES -->
	<?php include("../php/historique.php"); ?>
	<!-- /INCLUDES -->

	<div class="index-gridbag">

		<!-- SIMULATION -->
		<div class="index-box1" id="simulation">
			<h2>Simulation</h2>
			<div class="form">
				<div class="form-simulation"></div>
				<div class="container">
					<?php 
					include("../php/simulation.php"); 
					include("../php/logs.php");
					?>

					<form action="../view/index.php#simulation" method="POST">
						<table>
							<tr>
								<td class="td_labels"><label for="capital">Capital (€)</label></td>
								<td class="td_inputs"><input id="capital" name="capital" type="number" min="0.01" step="0.01" placeholder="Entrer le capital" required></td>
							</tr>
							<tr>
								<td class="td_labels"><label for="rate">Taux (%)</label></td>
								<td class="td_inputs"><input id="rate" name="rate" type="number" step="0.01" placeholder="Entrer le taux" required></td>
							</tr>
							<tr>
								<td class="td_labels"><label for="monthNumber">Nombre de mois</label></td>
								<td class="td_inputs"><input id="monthNumber" name="monthNumber" type="number" min="1" step="1" placeholder="Entrer le nombre de mois" required></td>
							</tr>
							<tr>
								<td class="td_labels"></td>
								<td class="td_inputs"><div class="inputs-button"><input class="buttonSimulation" type="submit" name="simulate" value="Simuler"></div></td>
							</tr>
						</table>
						<h2 class="resultat-simulation"><?php echo simulation(); ?><h2>
					</form>
				</div>
			</div>
		</div>

		<!-- HISTORIQUE -->
		<div class="index-box2" id="historique">
			<h2>Historique</h2>
			<div class="content-table">
				<table>
					<thead>
						<tr>
							<th>Date</th>
							<th>Capital</th>
							<th>Taux</th>
							<th>Nombre de Mois</th>
							<th>Mensualité</th>
						</tr>
					</thead>
					<tbody>
						<?php read_history(); ?>
					</tbody>
				</table>
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

<script type="text/javascript" src="../script/menu.js"></script>

</html>