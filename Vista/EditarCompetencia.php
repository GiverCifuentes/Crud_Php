<?php
require_once('../Modelo/Crud.Competencia.php');

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