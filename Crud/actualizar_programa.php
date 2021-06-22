<?php
  include ('funciones.php');
  session_start ();
  $vide=$_SESSION ['ide1'];
  $vnombre=$_POST ['nombres'];
  $vtipo=$_POST ['tipo'];
 
  $miconexion=conectar_bd ('','Crud');
  // $query = "UPDATE aprendices set nombres = '$vnombres', apellidos = '$vapellidos', direccion = '$vdireccion', telefono = '$vtelefono' WHERE ide1=$vid";
  $resultado=consulta($miconexion,"update programa set Progra_Nombre='{$vnombre}', Progra_tipo='{$vtipo}' where Progra_id= '{$vide}'");

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
       <a href="index.php">Regresar</a>
       </button>   
       <button>
       <a href="crear_programa.php">Crear</a>
       </button>
       <button>
       <a href="consulta_programa.php">Consultar</a>
       </button>
       <button>
       <a href="modificar_programa.php">Modificar</a>
       </button>
       <button>
       <a href="borrar_programa.php">Borrar</a>
       </button>
    </li>
  </nav>