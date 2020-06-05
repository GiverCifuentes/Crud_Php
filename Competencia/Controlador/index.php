<?php

session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:../../index.php");
}

?>