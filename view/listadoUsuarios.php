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
<div class="text-center bg-light">

  <div class="container">
    <div class="py-4 text-center">
      <h2>Listado de Usuarios</h2>
            
    </div>

    <table class="table table-hover table-sm">
      <thead class="table-primary">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Usuario</th>
          <th scope="col">Contraseña</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once("../dao/UsuarioDAOC.php");
        
        $dao = new UsuarioDAOC();
        $listaUsu = $dao->listarUsuarios();
        // var_dump($listaUsu);

        foreach ($listaUsu as $usuario) {
        ?>
          <tr>
            <td><?php echo $usuario->getIdUsuario(); ?></td>
            <td><?php echo $usuario->getUsuario(); ?></td>
            <td><?php echo $usuario->getClave(); ?></td>
          </tr>

        <?php
          
        }

        // ?>
        <!-- //   <tr>
        //     <td><?php echo $listaUsu[$i]->getIdUsuario(); ?></td>
        //     <td><?php echo $listaUsu[$i]->getUsuario(); ?></td>
        //     <td><?php echo $listaUsu[$i]->getClave(); ?></td>
        //   </tr> -->

        <!-- <?php 
        // }
        // ?>
        -->

      </tbody>
    
    </table>
 
</div>
</section> 

<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

</body>

</html>