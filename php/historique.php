<?php
function read_history($file,$nbr_lignes)
{
    $fp = fopen($file, "r");

    $motif = "pair";
    for ($i = 0; $i < $nbr_lignes; $i++) {
        $ligne = fgetcsv($fp, 1024, ";");
        if ($ligne != null) {
            if ($motif == "pair") {
                $motif = "impair";
            } else {
                $motif = "pair";
            }
            echo "<tr class='ligne-" . $motif . "' onclick=\"chargementHistoriqueData(this)\">";
            for ($j = 0; $j < count($ligne); $j++) {
                switch ($j):
                    case 0:
                        echo "<td>$ligne[$j]</td>";
                        break;
                    case 1:
                        echo "<td>$ligne[$j] €</td>";
                        break;
                    case 2:
                        echo "<td>$ligne[$j] %</td>";
                        break;
                    case 3:
                        echo "<td>$ligne[$j]</td>";
                        break;
                    case 4:
                        echo "<td>$ligne[$j] €/mois</td>";
                        break;
                endswitch;
            }
            echo "</tr>";
        }
    }
    fclose($fp);
}

function put_history($file,$data)
{
    $oldfile = file_get_contents($file);
    file_put_contents($file, $data . $oldfile);
}
