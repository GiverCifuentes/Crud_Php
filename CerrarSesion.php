<?php
//Destruccion de la sesion
session_start();
session_destroy();
header("Location:index.php");

?>