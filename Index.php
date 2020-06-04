<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="css/estilosIndex.css"></link>
</head>
<body>
     <h1 align="center">Ingreso</h1>
    
     <form action="Usuario/Controlador/ControladorUsuario.php" method="POST" align="center">
          <div class="form-group">
               <label for="">Usuario</label>
               <input type="text" class="form-control" id="NombreUsuario" name="NombreUsuario" >
          </div>
          <div class="form-group">
               <label for="">Password</label>
               <input type="password" class="form-control" id="Contrasena" name="Contrasena">
          </div>
        
          <button type="submit" name="Acceder" id="Acceder">Ingresar</button>
     </form>
</body>
</html>