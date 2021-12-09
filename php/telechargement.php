<?php
header('Content-type: application/txt');
$filename = "logs_".date("Y_m_d_H_i_s").".txt";
header('Content-Disposition: attachment; filename='.$filename);
readfile('../assets/logs.txt');
?>