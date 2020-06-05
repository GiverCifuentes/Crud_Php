<?php
require_once"../../Conexion.php";
require_once"../Modelo/Usuario.php";
require_once"../Modelo/CrudUsuario.php";

$Usuario = new Usuario();
$CrudUsuario = new CrudUsuario();


if(isset($_POST["Acceder"])){
//echo "controlador";
     $Usuario->setNombreUsuario($_POST["NombreUsuario"]);
     $Usuario->setContrasena($_POST["Contrasena"]);

     //var_dump($Usuario);

     $Usuario = $CrudUsuario->ValidarAcceso($Usuario);
     //var_dump($Usuario);
     if($Usuario->getExiste()==1){
          session_start(); //inicializar sesion
          //Definir las variables de sesion a emplear en el aplicativo
          $_SESSION["NombreUsuario"] = $Usuario->getNombreUsuario();
          $_SESSION["IdUsuario"] = $Usuario->getIdUsuario();
          $_SESSION["IdRol"] = $Usuario->getIdRol();
          header("location:../../menu.php");

     }else
     {
          ?>
          <script>

          //header("location:../../index.php");

          alert("Usuario y/o clave  incorrecta");
          document.location.href="../../Index.php";

          </script>


          <?php
     }



}
else {
     header("location:../../index.php");
}

?>