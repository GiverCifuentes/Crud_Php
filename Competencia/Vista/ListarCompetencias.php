<?php

session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:../../index.php");
}

    require_once('../../conexion.php');
    require_once('../Modelo/Competencia.php');
    require_once('../Modelo/Crud.Competencia.php'); //Incluir el modelo CrudCompetencia
    

    $CrudCompetencia = new CrudCompetencia(); //Crar un objero CrudCompetencia
    $ListaCompetencia = $CrudCompetencia->ListarCompetencias(); //llamado del metodo listarCompetencia
    //var_dump($ListaCompetencia);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Listado de competencias</h1>
    <a href="../../TCPDF/examples/reportepdfcompetencia.php">reporte Pdf</a>
    <table align="center" border="1">
    
        <thead>
            <tr>
                <th>Codigo Competencia</th>
                <th>Nombre Competencia</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($ListaCompetencia as $Competencia){
                    ?>
                        <tr>
                            <td><?php echo $Competencia->getCodigoCompetencia(); ?></td>
                            <td><?php echo $Competencia->getNombreCompetencia(); ?></td>
                            <td>
                            <a href="EditarCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>">Editar</a> 
                            <a href="../Controlador/ControladorCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>&Accion=EliminarCompetencia">Eliminar</a></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>


</body>
</html>