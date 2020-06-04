<?php     


class Usuario{
     private $IdUsuario;
     Private $NombreUsuario;
     private $Contrasena;
     private $IdRol;
     private $IdEstado;
     private $Existe;

     public function __construct(){
     }
     
     public function setIdUsuario($IdUsuario){
          $this->IdUsuario = $IdUsuario;
     }
     public function getIdUsuario(){
          return $this->IdUsuario;
     }

     public function setNombreUsuario($NombreUsuario){
          $this->NombreUsuario = $NombreUsuario;
     }
     public function getNombreUsuario(){
          return $this->NombreUsuario;
     }

     public function setContrasena($Contrasena){
          $this->Contrasena = $Contrasena;
     }
     public function getContrasena(){
          return $this->Contrasena;
     }

     public function setIdRol($IdRol){
          $this->IdRol = $IdRol;
     }
     public function getIdRol(){
          return $this->IdRol;
     }

     public function setIdEstado($IdEstado){
          $this->IdEstado = $IdEstado;
     }
     public function getIdEstado(){
          return $this->IdEstado;
     }

     public function setExiste($Existe){
          $this->Existe = $Existe;
     }
     public function getExiste(){
          return $this->Existe;
     }



}



?>