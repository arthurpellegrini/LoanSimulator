<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <link href="../css/styles.css" rel="stylesheet" />
    <title>Projet PHP 2021 - Connexion</title>
</head>


<body>
    <?php include("../php/connexion.php"); ?>
    <div class="form">
        <h1>Connexion</h1>
        <div class="container">
            <form action="" method="POST">
                <input type="text" placeholder="Entrer votre identifiant" name="username" required><br>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><br>
                <input type="submit" name="connexion" value="Connexion"><br>
                <?php connect(); ?>
            </form>
        </div>
    </div>
</body>

</html>