<?php
include('Funciones.php');
$vnumero=$_POST ['numero'];
$vnumero2=$_POST['numero2'];


$miconexion=conectar_bd ('','crud');
$resultado=consulta ($miconexion, "insert into fichas (ficha_progra, ficha_numero) values ('{$vnumero}','{$vnumero2}')");
 
if ($resultado)
   {
       echo "Guardado exitoso";
   }
  
?>

<nav class="navegacion">
       <li>
       <button>
       <a href="/index.php">Regresar</a>
       </button>
       <button>
       <a href="/crear_ficha.php">Crear</a>
       </button>
       <!-- <br> -->
       <button>
       <a href="/consultar_ficha.php">Consultar</a>
       </button>
       <!-- <br> -->
       <button>
       <a href="/modificar_ficha.php">Modificar</a>
       </button>
       <button>
       <a href="/borrar_ficha.php">Borrar</a>
       </button>
</nav>       