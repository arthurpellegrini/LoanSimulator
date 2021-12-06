<?php session_start();
if(!isset($_SESSION["username"],$_SESSION["password"])) {
    header("Location: ../view/index.php");
    }?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="../css/styles.css" rel="stylesheet" />
    <title>Projet PHP 2021 - Backend</title>
</head>

<header>
    <nav>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="https://www.iut-velizy-rambouillet.uvsq.fr/"><img src="../assets/img/logo_iut_velizy.png" height="40" alt="Logo de l'IUT de Vélizy." /></a>
            </li>
            <li class="nav-item"><a href="#logs">Logs</a></li>
            <li class="nav-item"><a href="#historique">Historique</a></li>
            <li class="nav-item"><a href="../php/deconnexion.php">Déconnexion</a></li>
        </ul>
    </nav>
</header>

<h1>Backend</h1>

<body>
    <h2 id="logs">Logs</h2>
    <div class="logs">

    </div>

    <h2 id="Historique">Historique</h2>
</body>

<footer>
    <section class="footer">
        <div class="social">
            <a href="https://github.com/arthurpellegrini/loan-simulator"><img src="../assets/img/github_logo.png" height="40" alt="Logo de Github." /></a>
        </div>

        <ul class="list">
            <li>
                <a href="#">Haut de page</a>
            </li>
            <li>
                <a href="#logs">Logs</a>
            </li>
            <li>
                <a href="#historique">Historique</a>
            </li>
        </ul>

        <p class="copyright">
            Copyright © Nathan Delorme - Abdouramane Gadio - Léo Meyne - Arthur Pellegrini - Balthazar Puget - 2021
        </p>
    </section>

</footer>

</html>