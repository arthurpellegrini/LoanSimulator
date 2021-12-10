<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Projet PHP 2021 - Connexion</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="https://www.iut-velizy-rambouillet.uvsq.fr/" class="nav-logo">
                <img src="assets/img/logo_iut_velizy.png" height="40" alt="Logo de l'IUT de Vélizy." />
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Acceuil</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <?php include("php/connexion.php"); ?>
    <div class="page-connexion">
        <div class="form">
            <div class="form-connexion">
                <h2 class="connexion-title">Connexion</h2>
                <div class="container">
                    <form action="" method="POST">
                        <input type="text" placeholder="Entrer votre identifiant" name="username" required><br>
                        <input type="password" placeholder="Entrer votre mot de passe" name="password" required><br>
                        <div class="inputs-button"><input type="submit" name="connexion" value="Connexion"></div><br>
                        <?php if (isset($_POST['username'], $_POST['password'])) {
                            echo connect();
                        }
                        if (isset($_GET['error-message']) && $_GET['error-message'] == 1) {
                            echo "<p class=\"message-error\">Merci de vous authentifier</p>";
                        } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
	<footer class="footer-connexion">
		<div class="social">
			<a href="https://github.com/arthurpellegrini/loan-simulator"><img src="assets/img/github_logo.png" height="40" alt="Logo de Github." /></a>
		</div>

		<ul class="list">
			<li>
				<a href="#">Haut de page</a>
			</li>
			<li>
				<a href="index.php">Acceuil</a>
			</li>
		</ul>

		<p class="copyright">
			Copyright © Nathan Delorme - Abdouramane Gadio - Léo Meyne - Arthur Pellegrini - Balthazar Puget - 2021
		</p>
	</footer>
</body>

<script type="text/javascript" src="script/menu.js"></script>

</html>