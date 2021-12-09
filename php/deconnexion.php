<?php 
function disconnect()
{
    session_start();
    session_destroy();
    header("Location: ../view/");
    exit();
}
disconnect();
?>