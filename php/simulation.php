<?php
include("historique.php");
include("logs.php");

if (isset($_POST['capital'], $_POST['rate'], $_POST['monthNumber'])) {
    $capital = $_POST['capital'];
    $rate = $_POST['rate'];
    $monthNumber = $_POST['monthNumber'];
    $monthlyCost = compute($capital, $rate, $monthNumber);
    $data = date("d/m/Y") . ";" . $capital . ";" . $rate . ";" . $monthNumber . ";" . $monthlyCost . "\n";
    put_history("../assets/historique.csv",$data);
    writeLogs("../assets/logs.txt",generateLog($capital, $rate, $monthNumber, $monthlyCost));
    header('Location: ../index.php?mensualite=' . $monthlyCost.'#simulation');
}

function compute($capital, $rate, $monthNumber)
{
    if ($rate == 0) {
        return round(($capital / $monthNumber), 2);
    }
    return round(($capital * ($rate / 100) / 12) / (1 - pow((1 + ($rate / 100) / 12), -$monthNumber)), 2);
}