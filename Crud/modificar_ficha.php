<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Ficha</title>
    <link rel="stylesheet" href="/Modificar.css">
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

       <div id="divconsulta" class="Seccion">
       <br>
       <div id="div2">
          <div id="div4">
              <form name="formulario" role="form" method="post">
             <div class="col-md-12">
             <strong class="igris">Ingresa Identifiacion para modificacion</strong>
             
                <br> <br>
                <div class="form-row">
                <div class="form-group col-md-5">
                <input class="form-control" type="number" name="numid" min="1" max="999999999999" autofocus value ="" placeholder="IDENTIFICACION DE LA FICHA"/> 
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
           $resultado=consulta($miconexion, "select * from fichas where ficha_numero = '{$vnumid}'");

           if ($resultado ->num_rows>0) 
           {
               $fila = $resultado -> fetch_object();
               $_SESSION ['ide1']= $fila ->ficha_numero;
                ?>
       <form id="formulario2" role="form" method="post" action="actualizar_ficha.php">
                   <div class ="col-md-12">
                    <strong class="igris">Datos de Ficha </strong> <br>

       <label class="igris">N° de Ficha:</label>
       <input class="form-control" type="text" name="ide" value=" <?php echo $fila ->ficha_numero?>"/> <br>
  
       <label class="igris">N° de programa:</label>
       <input class="form-control" style ="text-transform: uppercase," type="text" name="nombre" required value=" <?php echo $fila ->ficha_progra?>"/> <br>

     
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