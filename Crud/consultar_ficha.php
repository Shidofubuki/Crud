<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de ficha</title>
    <link rel="stylesheet" href="/Consulta.css">
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
       <!-- <br> -->
       

       </li>
       </nav>






    <div id="divconsulta" class="Seccion">
    <br>
    <div id="div2"> 
    <img src="Simbolo tu valle.png" width="200">
       <div id="div4">
       <form name="formulario" role="form" method ="post"">
           <div class="col-md-12">
               <strong class="igris">Consultar ficha</strong>
               <br> <br>
               <div class="form-row">
                   <div class="form-group col-md-3">
                       <input class="form-control" type="numero" name="numero" min="1" max="999999999999999" value="" placeholder ="IDENTIFICACION DE FICHA" />
               </div>
               <div class="form-row">
                   <div class="form-group col-md-3">
                       <input class="form-control" type="numero" name="numero2" min="1" max="999999999999999" value="" placeholder ="IDENTIFICACION DE PROGRAMA"/>
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
        $vnumero2=$_POST['numero'];
        $vnumero=$_POST['numero2'];
       
        $miconexion=conectar_bd ('','Crud');
        $resultado=consulta ($miconexion, "select * from fichas where trim(ficha_progra) like '%{$vnumero}%' and trim(ficha_numero) like '%{$vnumero2}%'"); 
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado ->fetch_object())
                            {
                                echo $fila ->ficha_progra."".$fila ->ficha_numero."<br>";         
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