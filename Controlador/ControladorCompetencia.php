<?php

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
else if($_GET["Accion"]=="EliminarCompetencia")
{
    echo "En desarrollo";
    echo $_GET["CodigoCompetencia"];
}

?>