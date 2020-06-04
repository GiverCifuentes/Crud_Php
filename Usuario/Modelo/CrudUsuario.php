<?php

class CrudUsuario{
     
     public function __construct(){}

     public function ValidarAcceso($Usuario){
          $Db = Db::Conectar();

          $sql = $Db->prepare('SELECT * FROM usuarios WHERE NombreUsuario=:NombreUsuario AND Contrasena=:Contrasena AND IdEstado=1');
          $sql->bindvalue('NombreUsuario',$Usuario->getNombreUsuario());
          $sql->bindvalue('Contrasena',$Usuario->getContrasena());
          $sql->execute();//ejecuta  consulta
          $MiUsuario = new Usuario();
          $MiUsuario->SetExiste(0);

          if($sql->rowCount() > 0) { // dtermina el numero de registros en la consulta
               $DatosUsuario = $sql->fetch();//almacena datos arrojados
               
               $MiUsuario->setIdUsuario($DatosUsuario['IdUsuario']);
               $MiUsuario->setNombreUsuario($DatosUsuario['NombreUsuario']);
               $MiUsuario->setIdRol($DatosUsuario['IdRol']);
               $MiUsuario->SetExiste(1);               
          }
          return $MiUsuario;

     }

}



?>