<?php

session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:../../index.php");
}

require_once('../../conexion.php');
require_once('../Modelo/Competencia.php');
require_once('../Modelo/Crud.Competencia.php'); //Incluir el modelo CrudCompetencia


$CrudCompetencia = new CrudCompetencia(); //Crear un Objeto de tipo CrudCompetencia
$Competencia = $CrudCompetencia::ObtenerCompetencia($_GET["CodigoCompetencia"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1 align="center">Competencia</h1>
    <form action="../Controlador/ControladorCompetencia.php" method="POST">
        Codigo Competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia"
        value="<?php echo $Competencia->getCodigoCompetencia(); ?>">
        <br>
        Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia"
        value="<?php echo $Competencia->getNombreCompetencia(); ?>">
        <br>

        <input type="hidden" name="Modificar">
        <button type="submit">Modificar</button>
    </form>
</body>
</html>