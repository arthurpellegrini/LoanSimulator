<?php session_start();
if (!isset($_SESSION["username"], $_SESSION["password"])) {
    header("Location: ../view/index.php");
} ?>

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

<body>
    <header class="header">
        <nav class="navbar">
            <a href="https://www.iut-velizy-rambouillet.uvsq.fr/" class="nav-logo">
                <img src="../assets/img/logo_iut_velizy.png" height="40" alt="Logo de l'IUT de Vélizy." />
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#logs" class="nav-link">Logs</a>
                </li>
                <li class="nav-item">
                    <a href="../php/deconnexion.php" class="nav-link">Déconnexion</a>
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
        <h1>Backend</h1>
    </div>


    <h2 id="logs">Logs</h2>
    <div class="logs">

    </div>

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
            </ul>

            <p class="copyright">
                Copyright © Nathan Delorme - Abdouramane Gadio - Léo Meyne - Arthur Pellegrini - Balthazar Puget - 2021
            </p>
        </section>

    </footer>

</body>

<script type="text/javascript" src="../script/menu.js"></script>

</html>