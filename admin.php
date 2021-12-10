<?php session_start();
if (!isset($_SESSION["username"], $_SESSION["password"])) {
    header("Location: connexion_form.php?error-message=1");
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Projet PHP 2021 - Backend</title>
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
                <li class="nav-item">
                    <a href="#logs" class="nav-link">Logs</a>
                </li>
                <li class="nav-item">
                    <a href="#historique" class="nav-link">Historique</a>
                </li>
                <li class="nav-item">
                    <a href="php/deconnexion.php" class="nav-link">Déconnexion</a>
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
    <!-- INCLUDE -->
    <?php include("php/logs.php");
    include("php/historique.php"); ?>

    <div class="logs" id="logs">
        <h2>Logs</h2>
        <div class="buttons">
            <a href="php/telechargement.php?file=logs.txt" download>Télécharger</a>
            <a href="php/suppression.php?file=logs.txt">Supprimer</a>
        </div>
        <div class="terminal">
            <div class="terminal-scrollbar" id="terminal">
                <p><?php readlogs("assets/logs.txt"); ?></p>
            </div>
        </div>
    </div>

    <div class="historique-backend" id="historique">
        <h2>Historique</h2>
        <div class="buttons">
            <a href="php/telechargement.php?file=historique.csv" download>Télécharger</a>
            <a href="php/suppression.php?file=historique.csv">Supprimer</a>
        </div>
        <div class="content-table backend">
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
                    <?php read_history("assets/historique.csv",count(file("assets/historique.csv"))); ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <section class="footer">
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

</body>

<script type="text/javascript" src="script/menu.js"></script>
<script type="text/javascript" src="script/scrollbar.js"></script>

</html>