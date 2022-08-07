<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
 
</head>

<body>

  <header>
    <?php
//Includes 
include("../include/header.php");
?>
    </header>

<section>

<div class="bg-light">
    <div class="container">

    <div class="py-4 text-center">
        
        <h2>Alta de Usuario</h2>
        <p class="lead">Una vez registrado, podrás ingresar.</p>
    </div>

    <div class="col-md-12">
        <form action="../controller/checkUsuario.php" method="post" class="needs-validation" >
          
            <div class="row">
           
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text">Email</span>
                    <label for=usuario class="form-label"></label>
                    <input type="email" class="form-control" id="email" name="usuario" placeholder="Tu usuario" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <div class="invalid-feedback">
                        El email debe contener un @ 
                    </div>  
                    <br>                           
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña</span>
                    <label for="password" class="form-label"></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    <div class="invalid-feedback">
                      La contraseña debe tener más de 8 dígitos, contener letras minúsuculas y mayúsculas y algún dígito
                    </div>                
                </div>                     
           
   </div>
                  
             <hr class="mb-4">
           
             <div class="row">
                <div class="input-group mb-3">
                    <button class="btn btn-primary float-right" style="margin:auto" type="submit">Enviar</button>

                </div>
                
            </div>                    
         
        </form>
        </div>
</section> 


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>