<?php
function generateLog($capital, $rate, $monthNumber, $monthlyCost)
{
    $ip = $_SERVER['REMOTE_ADDR'];      // Get the visitor's ip address
    $date = date('d/m/Y');              // Get the date with the format 00/00/0000
    $time = date('H:i:s');              // Get the time with the format 00:00:00
    $log =  "---------------------------------------------------------------------------\n" . // Log text format
            "Simulation de " . $ip . ", le " . $date . " à " . $time ."\n".
            "Montant emprunté : " . $capital . "€" ."\n".
            "Mensualités : " . $monthNumber ."\n".
            "Taux : " . $rate . "%" ."\n".
            "Montant mensuel : " . $monthlyCost . "€\n";
    
    return $log;
}

function writeLogs($file,$data)
{
    $fp = fopen($file, 'a');  // Opens the logs file with the 'append' mode
    fwrite($fp, $data);               // Append the data (log) to the file
    fclose($fp);                      // Close the opened file
}

function readLogs($file) {
    $fp = fopen($file,'r');
    while ($line = fgets($fp)) {
        echo($line)."<br>";
    }
    fclose($fp);
}
?>