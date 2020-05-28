<?php

    require_once('../conexion.php');
    class CrudCompetencia{

        public function __construct(){}

        public function InsertCompetencia($Competencia){
            $Db = Db::Conectar(); //Conectar a la base de datos
            $Insert = $Db->prepare('INSERT INTO competencia VALUES(:CodigoCompetencia,:NombreCompetencia)');
            $Insert->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
            $Insert->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());
            try{
                $Insert->execute(); //Ejecutar el insert
                echo "Registro exitoso";
            }
            catch(Exception $e){ //Capturar Errores
                echo $e->getMessage(); //Mostrar errores en la insert
                die();
            }
        }

        //Listar todos los registros de la tabla competencia
        public function ListarCompetencias(){
            $Db = Db::Conectar();
            $ListaCompetencias = [];
            $Sql = $Db->query('SELECT * FROM competencia');
            $Sql->execute();
            foreach($Sql->fetchAll() as $Competencia){
                $MyCompetencia = new Competencia();
                //echo $Competencia['CodigoCompetencia']."--".$Competencia['NombreCompetencia']."//";
                $MyCompetencia->setCodigoCompetencia($Competencia['CodigoCompetencia']);
                $MyCompetencia->setNombreCompetencia($Competencia['NombreCompetencia']);
                $ListaCompetencias[] = $MyCompetencia;
            }
            return $ListaCompetencias;
        }
    }

    //$Crud = new CrudCompetencia();
    //$Crud->ListarCompetencias();
?>