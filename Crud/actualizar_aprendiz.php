<?php
  include ('funciones.php');
  session_start ();
  $vide=$_SESSION ['ide1'];
  $vnombres=$_POST ['nombres'];
  $vapellidos=$_POST ['apellidos'];
  $vdireccion=$_POST ['direccion'];
  $vtelefono=$_POST ['telefono'];
  
  $miconexion=conectar_bd ('','Crud');
  // $query = "UPDATE aprendices set nombres = '$vnombres', apellidos = '$vapellidos', direccion = '$vdireccion', telefono = '$vtelefono' WHERE ide1=$vid";
  $resultado=consulta($miconexion,"update aprendices set apre_Nombres='{$vnombres}', apre_Apellidos='{$vapellidos}', apre_Direccion= '{$vdireccion}', apre_Telefono ='{$vtelefono}' where apre_id= '{$vide}'");

  if ($miconexion -> affected_rows>0)
  { 
   
      echo"Actualizacion exitosa";
  }    
  else {
   
    echo "Listo";
    }

$miconexion -> close ();

  ?>
<nav class="navegacion">
    <li>
       <button>
       <a href="index.php">Regresar</a>
       </button>   
       <button>
       <a href="registro_aprendiz.php">Crear</a>
       </button>
       <button>
       <a href="consulta_aprendiz.php">Consultar</a>
       </button>
       <button>
       <a href="modificar_aprendiz.php">Modificar</a>
       </button>
       <button>
       <a href="borrar_aprendiz.php">Borrar</a>
       </button>
    </li>
  </nav>
 
