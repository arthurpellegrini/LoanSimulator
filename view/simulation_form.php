<?php include("../php/simulation.php"); ?>

<form action="../view/index.php#simulation" method="POST">
    <table>
        <tr>
            <td class="td_labels"><label for="capital">Capital (€)</label></td>
            <td class="td_inputs"><?php
                                    if (!isset($_POST['capital']))
                                        echo '<input id = "capital" name = "capital" type = "number" min = "0.01" step = "0.01" placeholder = "10000" required>';
                                    else
                                        echo '<input id = "capital" name = "capital" type = "number" min = "0.01" step = "0.01" value = "' . $_POST['capital'] . '" required>';
                                    ?></td>
        </tr>
        <tr>
            <td class="td_labels"><label for="rate">Taux (%)</label></td>
            <td class="td_inputs"><?php
                                    if (!isset($_POST['rate']))
                                        echo '<input id = "rate" name = "rate" type = "number" step = "0.01" placeholder = "1" required>';
                                    else
                                        echo '<input id = "rate" name = "rate" type = "number" step = "0.01" value = "' . $_POST['rate'] . '" required>';
                                    ?></td>
        </tr>
        <tr>
            <td class="td_labels"><label for="monthNumber">Nombre de mois</label></td>
            <td class="td_inputs"><?php
                                    if (!isset($_POST['monthNumber']))
                                        echo '<input id ="monthNumber" name = "monthNumber" type = "number" min = "1" step = "1" placeholder = "12" required>';
                                    else
                                        echo '<input id ="monthNumber" name = "monthNumber" type = "number" min = "1" step = "1" value = "' . $_POST['monthNumber'] . '" required>';
                                    ?></td>
        </tr>
        <tr>
            <td class="td_labels"></td>
            <td class="td_inputs"><input class="buttonSimulation" type="submit" name="simulate" value="Simuler"></td>
        </tr>
    </table><br>
    <h2><?php echo simulation(); ?>€<h2>
</form>