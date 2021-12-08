<?php
function connect()
{
    if(isset($_POST['username'], $_POST['password']))
    {
        $file = fopen("../assets/login.txt", "r") or die("Could not open login.txt file");
        $line = fgets($file, 1024);
        $couple = explode(';', $line);
        $adminLogin = $couple[0];
        $adminPassword = $couple[1];

        if($adminLogin == $_POST["username"] && $adminPassword == hash("sha256", $_POST['password']))
        {
            session_start();
            $_SESSION["username"] = $adminLogin;
            $_SESSION["password"] = $adminPassword;
            header("Location: ../view/admin.php");
        }
        return "<p>Nom d'utilisateur ou mot de passe incorrect</p>";
    }
}

function disconnect()
{
    session_start();
    session_destroy();
    header("Location: ../view/index.php");
    exit();
}
?>