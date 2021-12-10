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
                        <?php if(isset($_POST['username'],$_POST['password'])){
                                echo connect(); 
                            }
                            if(isset($_GET['error-message']) && $_GET['error-message']==1){
                                echo "<p class=\"message-error\">Merci de vous authentifier</p>";
                            } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>