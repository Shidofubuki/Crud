<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Aprendiz</title>
    <link rel="stylesheet" href="Consulta.css">
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
    <img src="Simbolo tu valle.png" width="200">
       <div id="div4">
       <form name="formulario" role="form" method ="post"">
           <div class="col-md-12">
               <strong class="igris">Ingrese criterio de busqueda</strong>
               <br> <br>
               <div class="form-row">
                   <div class="form-group col-md-3">
                       <input class="form-control" type="numer" name="numid" min="9999" max="999999999999999" value="" placeholder ="IDENTIFICACION"/>
                   </div>

                   <div class="form-group col-md-3">
                       <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres"  value="" placeholder ="NOMBRES"/>
                   </div>

                   <div class="form-group col-md-3">
                       <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos"  value="" placeholder ="APELLIDOS"/>
                   </div>
                   <div class="form-group col-md-3">
                       <input class="consu" type ="submit" value="Consultar" >
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
        $vnumid=$_POST['numid'];
        $vnombres=$_POST['nombres'];
        $vapellidos=$_POST['apellidos'];
        $miconexion=conectar_bd ('','Crud');
        $resultado=consulta ($miconexion, "select * from aprendices where trim(apre_numid) like '%{$vnumid}%' and (trim(apre_Nombres like '%{$vnombres}%' and trim(apre_Apellidos) like '%{$vapellidos}%'))"); 
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado ->fetch_object())
                            {
                                echo $fila ->apre_id. " ".$fila -> apre_tipoid. " " .$fila->apre_numid." ".$fila -> apre_Nombres. " ".$fila -> apre_Apellidos. " " .$fila -> apre_Direccion. " ".$fila -> apre_Telefono. " ".$fila -> apre_Ficha. "<br>";         
                                                  }
                                           }
                                  else {
                                      echo "No existen registros";
                                      }
                        $miconexion -> close ();                       
    }?>
  </div>
 </div>
</div>
       
</body>
</html>