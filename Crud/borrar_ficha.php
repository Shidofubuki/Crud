<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion de ficha</title>
    <link rel="stylesheet" href="borrar.css">
    <link rel="icon" href="/Simbolo tu valle.png">
</head>
<body>

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

        <div id="divconsuta" class="Seccion">
        <br>
        <div id="div2" >
        <div id="div4" >
        <form name="formulario" role="form" method="Post">
        <div class="col-md-12">
        <strong class="igris">Ingrese </strong>
        <br> <br>
        <div class="form-row">
        <div class="form-group col-md-5">
        <input class="form-control" type="number" name="numero" min="1" max="9999999999999999" value ="" placeholder="IDENTIFICACION"/>
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
            $vnumero=$_POST['numero'];
            $miconexion=conectar_bd ('','Crud');
            $resultado=consulta ($miconexion, "select * from fichas where ficha_numero='{$vnumero}'"); 
            $resultado2=consulta ($miconexion, "delete from fichas where ficha_numero='{$vnumero}'"); 

                              if ($resultado->num_rows>0) 
                              {
                                  $fila = $resultado -> fetch_object();

                                  echo $fila ->ficha_numero." ".$fila ->ficha_progra."<br>";       

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