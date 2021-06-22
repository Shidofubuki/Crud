<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de ficha</title>
    <link rel="stylesheet" href="/registro.css">
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

    <div id="div1" class="Seccion">
    <br> <br>
    <div id="div2">
     
    <?php session_start(); if (! empty($_SESSION['Tipo_usuario'])) { ?>
                  <img src="/Simbolo tu valle.png" width="200"> <?php} ?>

                  <div id="div3" Seccion>
                  <?php
                        if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                        
                  ?>
                                  <form id ="Formulario" role="form" method="post" action="guardado_ficha.php">
                             <div class="col-md-12">
                                       <strong class="igris">Ingresa los datos de la ficha </strong>
                            <br> <br>
                                    
                                     <div class ="form-row">                                   
                                     <div class="form-group col-md-6">
                                     <label class="igris">N° de Ficha:</label> 
                                     <input class="form-control input-lg" type="number" name="numero" min="9999" max="99999999999999" value="" placeholder="IDENTIFICACION" required/> <br>
                                 
                         </div>
                         </div>
                                     <label class="igris">N° de Programa:</label> 
                                     <input class="form-control input-lg" type="number" name="numero2" min="9999" max="99999999999999" value="" placeholder="IDENTIFICACION" required/>  <br>
                                        
                                     <input class="btn btn-primary" type="submit" value="Guardar">                              
                 </div>
                </form>   
                <?php
                 }
                else
                {
                    echo "No tiene permisos para realizar esta accion";
                }               
                ?>
                <br>
            </div>
        </div>
    </div>    
</body>
</html>