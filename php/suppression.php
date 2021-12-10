<?php
session_start();
if (isset($_SESSION["username"], $_SESSION["password"])) {
    $file = fopen("../assets/" . $_GET['file'], 'w');
    ftruncate($file, 0);
    fclose($file);
    if ($_GET['file'] == "logs.txt") {
        header("Location: ../admin.php#logs");
    } else {
        header("Location: ../admin.php#historique");
    }
} else {
    header("Location: ../connexion_form.php?error-message=1");
}
?>