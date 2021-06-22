<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Aprendiz</title>
    <link rel="stylesheet" href="/registro.css">
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

    <div id="div1" class="Seccion">
    <br> <br>
    <div id="div2">
     
    <?php session_start(); if (! empty($_SESSION['Tipo_usuario'])) { ?>
                  <img src="/Simbolo tu valle.png" width="200"> <?php} ?>

                  <div id="div3" Seccion>
                  <?php
                        if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                        
                  ?>
                                  <form id ="Formulario" role="form" method="post" action="guardado_aprendiz.php">
                             <div class="col-md-12">
                                       <strong class="igris">Ingresa los datos del aprendiz </strong>
                            <br> <br>

                                    
                               <div class ="form-row">
                                    <div class=" form-group col-xs-2">
                                        <label class="igris">Identificacion:</label> 
                                        <select clase="form-control" name="tipoid">
                                        <option value="CC">CC </option>
                                        <option value="RC">RC </option> 
                                        <option value="PEP">PEP</option>                           
                                     </select>
                        </div>   
                        <br>
                                     <div class="form-group col-md-6">
                                     <label class="igris">N° de ID:</label> 
                                     <input class="form-control input-lg" type="number" name="numid" min="9999" max="99999999999999" value="" placeholder="IDENTIFICACION" required/> 
                                 
                         </div>
                         </div>
                                 
                                     <label class="igris">Nombres:</label> 
                                     <input class="form-control" style ="text-transform: uppercase;" type="text" name="nombres" value ="" placeholder ="Nombres" required/> <br>
                                     
                                     <label class="igris">Apellidos:</label> 
                                     <input class="form-control" style ="text-transform: uppercase;" type="text" name="apellidos" value ="" placeholder ="Apellidos" required/> <br>    
                                     
                                     <label class="igris">Direccion:</label> 
                                     <input class="form-control" style ="text-transform: uppercase;" type="text" name="direccion" value ="" placeholder ="Direccion" required/> <br>
                                    
                                     <label class="igris">Telefono:</label> 
                                     <input class="form-control" type="number" name="telefono" min="9999" max="99999999999" value ="" placeholder="TELEFONO" required/> <br>
                                     
                                     <label class="igris">Ficha:</label> 
                                     <input class="form-control" type="number" name="ficha" min="9999" max="99999999999" value ="" placeholder="FICHA" required/> <br>
                                     

                                    
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