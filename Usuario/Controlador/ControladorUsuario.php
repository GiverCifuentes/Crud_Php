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