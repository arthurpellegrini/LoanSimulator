<?php 
function deleteLogs()
{
    $file = fopen("../assets/logs.txt", 'w');  // Opens the logs file with the 'write' mode     
    ftruncate($file,0);           // Removes text from the logs file
    fclose($file);                      // Close the opened file
}
deleteLogs();
header("Location: ../view/admin.php#logs");
?>