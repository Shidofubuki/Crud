<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion de aprendices</title>
    <link rel="stylesheet" href="borrar.css">
    <link rel="icon" href="/Simbolo tu valle.png">
</head>
<body>

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

        <div id="divconsuta" class="Seccion">
        <br>
        <div id="div2" >
        <div id="div4" >
        <form name="formulario" role="form" method="Post">
        <div class="col-md-12">
        <strong class="igris">Ingrese criterio de busqueda</strong>
        <br> <br>
        <div class="form-row">
        <div class="form-group col-md-5">
        <input class="form-control" type="number" name="numid" min="9999" max="9999999999999999" value ="" placeholder="IDENTIFICACION"/>
        </div>
        <div class="form-group col-md-3">
        <input class="btn btn primary" type="submit" value="Eliminar" >
        </div>
        </div>
        <br>
        </div>
     </form>
        <br>
   </div>

        <div id="divconsulta2">

        <?php     

         if ($_SERVER ['REQUEST_METHOD']==='POST') 
         {
            include('Funciones.php');
            $vnumid=$_POST['numid'];
            $miconexion=conectar_bd ('','Crud');
            $resultado=consulta ($miconexion, "select * from aprendices where apre_numid='{$vnumid}'"); 
            $resultado2=consulta ($miconexion, "delete from aprendices where apre_numid='{$vnumid}'"); 

                              if ($resultado->num_rows>0) 
                              {
                                  $fila = $resultado -> fetch_object();

                                  echo $fila ->apre_id." ".$fila ->apre_tipoid." ".$fila->apre_numid." ".$fila ->apre_Nombres." ".$fila -> apre_Apellidos." ".$fila ->apre_Direccion." ".$fila ->apre_Telefono." ".$fila ->apre_Ficha."<br>";       

                                  if ($resultado2) 
                                      echo "<br> Datos borradores exitosamente";
                                  } 
                                  else {
                                      echo "No exiten registros";
                                  }
                                  $miconexion ->close();
                           }?>
                     </div>
               </div>
          </div>
</body>
</html>