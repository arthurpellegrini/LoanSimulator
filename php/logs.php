<?php
$logsFilePath = "../Files/logs.txt";        // Relative path of the logs file

function generateLog($capital, $rate, $monthNumber, $monthlyCost)
{
    $ip = $_SERVER['REMOTE_ADDR'];      // Get the visitor's ip address
    $date = date('d/m/Y');              // Get the date with the format 00/00/0000
    $time = date('H:i:s');              // Get the time with the format 00:00:00
    $log =  "\n---------------------------------------------------------------------------" . // Log text format
            "\nSimulation de " . $ip . ", le " . $date . " à " . $time .
            "\nMontant emprunté : " . $capital . "€" .
            "\nMensualités : " . $monthNumber .
            "\nTaux : " . $rate . "%" .
            "\nMontant mensuel : " . $monthlyCost . "€";
    
    return $log;
}

function writeToLogs($data)
{
    $file = fopen("../assets/logs.txt", 'a');  // Opens the logs file with the 'append' mode
    fwrite($file, $data);               // Append the data (log) to the file
    fclose($file);                      // Close the opened file
}

function deleteLogs()
{
    $file = fopen("../assets/logs.txt", 'w');  // Opens the logs file with the 'write' mode
    fwrite($file, '');                  // Removes text from the logs file
    fclose($file);                      // Close the opened file
}
?>