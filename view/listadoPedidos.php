<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<div class="text-center bg-light">

  <div class="container">
    <div class="py-4 text-center">
      <h2>Listado de Pedidos</h2>
    </div>

    <table class="table table-hover table-sm">
      <thead class="table-primary">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Email</th>
          <th scope="col">Dirección</th>
          <th scope="col">Localidad</th>
          <th scope="col">Provincia</th>
          <th scope="col">CP</th>
          <th scope="col">Operaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once("../dao/PedidoDAOC.php");
        require_once("../model/Pedido.php");
        $pedDAO = new PedidoDAOC();
        $listPed = $pedDAO->listarPedidos();
        // var_dump($listPed);

        foreach ($listPed as $pedido) {
          // var_dump($pedido);
          echo "<tr>";
          echo "<td>";
          echo $pedido->getIdPedido();
          echo "</td>";
          echo "<td>";
          echo $pedido->getNombre();
          echo "</td>";
          echo "<td>";
          echo $pedido->getApellido();
          echo "</td>";
          echo "<td>";
          echo $pedido->getMail();
          echo "</td>";
          echo "<td>";
          echo $pedido->getLugarEntrega();
          echo "</td>";
          echo "<td>";
          echo $pedido->getLocalidad()->getNombre();
          echo "</td>";
          echo "<td>";
          // var_dump($pedido->getLocalidad()->getProvincia());
          echo $pedido->getLocalidad()->getProvincia()->getNombre();
          echo "</td>";
          echo "<td>";
          echo $pedido->getCodPostal();
          echo "</td>";
          echo "<td>";
          ?>
          <a href="udpPedido.php?id=<?php echo $pedido->getIdPedido(); ?>">
          <i class="fa fa-edit"></i>
          </a>
          <a href="delPedido.php?id=<?php echo $pedido->getIdPedido(); ?>">
          <i class="fa fa-trash"></i>
          </a>

          <?php
          echo "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>

    </table>

  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

</body>

</html>