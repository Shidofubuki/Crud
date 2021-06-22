<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de aprendices</title>
    <link rel="stylesheet" href="Modificar.css">
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

       <div id="divconsulta" class="Seccion">
       <br>
       <div id="div2">
          <div id="div4">
              <form name="formulario" role="form" method="post">
             <div class="col-md-12">
             <strong class="igris">Ingresa criterio de busqueda</strong>
             
                <br> <br>
                <div class="form-row">
                <div class="form-group col-md-5">
                <input class="form-control" type="number" name="numid" min="9" max="999999999999" autofocus value ="" placeholder="IDENTIFICACION"/> 
                </div>
                <div class="form-group col-md-3">
                <input class ="btn btn-primary" type="submit" value="Consultar">
                </div>
                </div>
                <br>
             </div>
            </form>
             <br>
       </div>
       <div id="divconsultas2">

       <?php
       if ($_SERVER ['REQUEST_METHOD']==='POST')
        {
           include('Funciones.php');
           session_start();
           $vnumid=$_POST['numid'];
           $miconexion=conectar_bd("", "crud");
           $resultado=consulta($miconexion, "select * from aprendices where apre_numid = '{$vnumid}'");

           if ($resultado ->num_rows>0) 
           {
               $fila = $resultado -> fetch_object();
               $_SESSION ['ide1']= $fila ->apre_id;
                ?>
       <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                   <div class ="col-md-12">
                    <strong class="igris">Datos del aprendiz</strong> <br>

       <label class="igris">Id:</label>
       <input class="form-control" type="text" name="ide" disabled ="disabled" value=" <?php echo $fila ->apre_id ?>"/> <br>
  
       <label class="igris">Nombres:</label>
       <input class="form-control" style ="text-transform: uppercase," type="text" name="nombres" required value=" <?php echo $fila ->apre_Nombres ?>"/> <br>

       <label class="igris">Apellidos:</label>
       <input class="form-control" style ="text-transform: uppercase," type="text" name="apellidos" value=" <?php echo $fila ->apre_Apellidos ?>" required/> <br>

       <label class="igris">Direccion:</label>
       <input class="form-control" style ="text-transform: uppercase," type="text" name="direccion" value=" <?php echo $fila ->apre_Direccion ?>" required/> <br>

       <label class="igris">Telefono:</label>
       <input class="form-control" type="number" name="telefono" min="9999" max="99999999999" value=" <?php echo $fila ->apre_Telefono ?>" required/> <br>
                                     <br>
                                     <input class="btn btn-primary" type="submit" value="Actualizar">
                                     <br>
                             </div>
                         </form>
                      <?php
           } 
           else {
               echo"No existen registros";
           }
           $miconexion ->close();
       }?>      
  </div>
</div>
</div>
    

</body>
</html>