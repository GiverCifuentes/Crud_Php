<?php
require_once('../conexion.php');
require_once('../Modelo/Competencia.php'); //Vincular la clase competencia
require_once('../Modelo/Crud.Competencia.php'); //Vincular la clase crud

$Competencia = new Competencia(); //Crear el objeto
$CrudCompetencia = new CrudCompetencia();
if(isset($_POST["Registrar"])) //Si la peticion es de registrar
{
    echo "Registrar";
    $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]); //Instanciar el atributo
    $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]);
    echo $Competencia->getNombreCompetencia(); //Verificar instanciacion
    $CrudCompetencia::InsertCompetencia($Competencia);
}
else if(isset($_POST["Modificar"])) //Si la peticion es de Modificar
{
    echo "Modificar";
    $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]); //Instanciar el atributo
    $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]);
    echo $Competencia->getNombreCompetencia(); //Verificar instanciacion
    $CrudCompetencia::ModificarCompetencia($Competencia); //Llamar el metodo para modificar
}

else if($_GET["Accion"]=="EliminarCompetencia")
{
    $CrudCompetencia::EliminarCompetencia($_GET['CodigoCompetencia']); //Llamar el metodo para Eliminar

}

?>