<?php
    class Competencia{
        //Parametros de entrada
        private $CodigoCompetencia;
        private $NombreCompetencia;

        //Definir constructor
        Public function __construct(){}

        //Definir los metodos set y get

        public function setCodigoCompetencia($CodigoCompetencia)
        {
            $this->CodigoCompetencia = $CodigoCompetencia;
        }

        public function getCodigoCompetencia()
        {
            return $this->CodigoCompetencia;
        }

        public function setNombreCompetencia($NombreCompetencia)
        {
            $this->NombreCompetencia = $NombreCompetencia;
        }

        public function getNombreCompetencia()
        {
            return $this->NombreCompetencia;
        }

    }

    //Testear funcionalidad de clase
    /*
    $Competencia = new Competencia(); //crear objeto
    $Competencia->setCodigoCompetencia(27);
    $Competencia->setNombreCompetencia("Python");
    echo "Codigo Competencia: ".$Competencia->getCodigoCompetencia().
    " NombreCompetencia: ".$Competencia->getNombreCompetencia();
    */
?>