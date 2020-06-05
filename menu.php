<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:Index.php");
}
echo $_SESSION["NombreUsuario"];
echo "ROl".$_SESSION["IdRol"];
?>



<a href="competencia/">Competencia</a>
<br>
<a href="CerrarSesion.php">Cerrar Sesión</a>