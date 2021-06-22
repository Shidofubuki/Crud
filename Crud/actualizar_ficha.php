<?php
  include ('funciones.php');
  session_start ();
  $vide=$_SESSION ['ide1'];
  $vnombre=$_POST ['nombre'];
 
 
  $miconexion=conectar_bd ('','Crud');
  // $query = "UPDATE aprendices set nombres = '$vnombres', apellidos = '$vapellidos', direccion = '$vdireccion', telefono = '$vtelefono' WHERE ide1=$vid";
  $resultado=consulta($miconexion,"update fichas set ficha_progra='{$vnombre}' where ficha_numero= '{$vide}'");

  if ($miconexion -> affected_rows>0)
  { 
   
      echo"Actualizacion exitosa";
  }    
  else {
   
    echo "No existen registros";
    }

$miconexion -> close ();

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