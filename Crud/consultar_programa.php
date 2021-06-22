<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Programa</title>
    <link rel="stylesheet" href="/Consulta.css">
    <link rel="icon" href="/Simbolo tu valle.png">
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

    <div id="divconsulta" class="Seccion">
    <br>
    <div id="div2"> 
    <img src="Simbolo tu valle.png" width="200">
       <div id="div4">
       <form name="formulario" role="form" method ="post"">
           <div class="col-md-12">
               <strong class="igris">Consulta</strong>
               <br> <br>
               <div class="form-row">

                 
                   <div class="form-group col-md-3">
                       <input class="form-control" type="numer" name="id" min="9999" max="999999999999999" value="" placeholder ="IDENTIFICACION"/>
                   </div>

                   <div class="form-group col-md-3">
                       <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre"  value="" placeholder ="NOMBRE"/>
                   </div>

                   <div class="form-group col-md-3">
                       <input class="form-control" style="text-transform: uppercase;" type="text" name="tipo"  value="" placeholder ="TIPO"/>
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
        $vid=$_POST['id'];
        $vnombre=$_POST['nombre'];
        $vtipo=$_POST['tipo'];
    
        $miconexion=conectar_bd ('','Crud');
        $resultado=consulta ($miconexion, "select * from programa where trim(Progra_id) like '%{$vid}%' and (trim(Progra_Nombre like '%{$vnombre}%' and trim(Progra_tipo) like '%{$vtipo}%'))");  
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado ->fetch_object())
                            {
                                echo $fila -> Progra_id. " ".$fila -> Progra_Nombre." ".$fila -> Progra_tipo. "<br>";        
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