<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navegacion">
    <li>   
       <button>
       <a href="index.php">Regresar</a>
       </button>  
       <button>
       <a href="crear_programa.php">Crear</a>
       </button>
       <button>
       <a href="consultar_programa.php">Consultar</a>
       </button>
       <button>
       <a href="modificar_programa.php">Modificar</a>
       </button>
       <button>
       <a href="borrar_programa.php">Borrar</a>
       </button>
    </li>
  </nav>

<?php
include('Funciones.php');

$vid=$_POST['id'];
$vnombre=$_POST['nombre'];
$vtipo=$_POST['tipo'];

$miconexion=conectar_bd ('','crud');
$resultado=consulta ($miconexion, "insert into programa (Progra_id, Progra_Nombre, Progra_Tipo) values ('{$vid}','{$vnombre}','{$vtipo}')");
 
if ($resultado)
   {
       echo "Guardado exitoso";
   }
  
?> 
</body>
</html>



