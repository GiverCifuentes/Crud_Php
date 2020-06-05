<?php
    //require_once('../Modelo/Competencia.php');
    //require_once('../conexion.php');
    class CrudCompetencia{

        public function __construct(){}

        public function InsertCompetencia($Competencia){
            $Db = Db::Conectar(); //Conectar a la base de datos
            $Insert = $Db->prepare('INSERT INTO competencia VALUES(:CodigoCompetencia,:NombreCompetencia)');
            $Insert->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
            $Insert->bindValue('NombreCompetencia',md5($Competencia->getNombreCompetencia()));
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

            public function ObtenerCompetencia($CodigoCompetencia)
            {
                $Db = Db::Conectar();
                //$Sql = $Db->prepare('SELECT * FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia AND NombreCompetencia');
                $Sql = $Db->prepare('SELECT * FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia');
                $Sql->bindValue('CodigoCompetencia',$CodigoCompetencia);
                $MyCompetencia = new Competencia();
                try{
                    $Sql->execute(); //Ejecutar el update
                    $Competencia = $Sql->fetch(); //Se almacena la variable $competencia los datos de la variabale $sql
                    $MyCompetencia->setCodigoCompetencia($Competencia['CodigoCompetencia']);
                    $MyCompetencia->setNombreCompetencia($Competencia['NombreCompetencia']);

                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificacion
                    die();
                }
                return $MyCompetencia;
            }

            public function ModificarCompetencia($Competencia)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('UPDATE competencia SET NombreCompetencia=:NombreCompetencia 
                WHERE CodigoCompetencia=:CodigoCompetencia');
                $Sql->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
                $Sql->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Modificacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }

            public function EliminarCompetencia($CodigoCompetencia)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('DELETE FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia');
                $Sql->bindValue('CodigoCompetencia',$CodigoCompetencia);
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Eliminacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }



        }

    //$Crud = new CrudCompetencia();
    //$Crud->ListarCompetencias();

?>