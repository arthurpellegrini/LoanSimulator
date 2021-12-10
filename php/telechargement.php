<?php
session_start();
if (isset($_SESSION["username"], $_SESSION["password"])) {
    if ($_GET['file'] == "logs.txt") {
        header('Content-type: application/txt');
        $filename = "logs_" . date("Y_m_d_H_i_s") . ".txt";
    } else {
        header('Content-type: application/csv');
        $filename = "historique_" . date("Y_m_d_H_i_s") . ".csv";
    }

    header('Content-Disposition: attachment; filename=' . $filename);
    readfile('../assets/' . $_GET['file']);
} else {
    header("Location: ../connexion_form.php?error-message=1");
}
?>