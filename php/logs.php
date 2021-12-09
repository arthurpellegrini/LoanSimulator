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

function writeLogs($data)
{
    $file = fopen("../assets/logs.txt", 'a');  // Opens the logs file with the 'append' mode
    fwrite($file, $data);               // Append the data (log) to the file
    fclose($file);                      // Close the opened file
}

function readLogs() {
    $txt_file = fopen('../assets/logs.txt','r');
    while ($line = fgets($txt_file)) {
        echo($line)."<br>";
    }
    fclose($txt_file);
}

function deleteLogs()
{
    $file = fopen("../assets/logs.txt", 'w');  // Opens the logs file with the 'write' mode
    // fwrite($file, '');       
    ftruncate($file,0);           // Removes text from the logs file
    fclose($file);                      // Close the opened file
}
?>