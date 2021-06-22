<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="/Simbolo tu valle.png">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <div id ="div1" class="Seccion">
              <br>
        <div id="div2" class="Seccion2">
                 <img src="Simbolo tu valle.png" width="200">
        </div>       

        <div id="div3" class="Seccion3">

             <form id="formulario" method="POST" action="Menu.php">
             <strong class="titulo"><h1>Login Here</h1></strong>
               <!-- <br> -->
             <label class="igris">Nombre</label>
                 <br>
             <input style="text-transform: uppercase" type="text" name="usuario" value="" required >
               <!-- <br> -->
             <label class="igris">Password</label> 
                 <br>
             <input type="password" name="clave" value="">
                <!-- <br> -->
                <a href="#">Lost yout Password</a> <br>
                <a href="#">Don´t have an account? </a> <br>
                <br>
             <!-- <input class="btn btn-primary" type="submit" value="Login"> -->
             <input type="submit" value="Login" class="button"> 
          <br>
        </form>
         
      </div>
     </div>
    <br>   
</body>
</html>