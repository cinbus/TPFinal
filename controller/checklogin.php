<?php 
    //obtiene los valores enviados desde login.html mediante POST
    $mail = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];

    //debug
    echo $mail;
    echo "<br>";
    echo $pass;
    echo "<br>";

    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $usuValido = $usuarioDAO->validarUsuarioYPass($mail, $pass);

    if($usuValido) {
        header("Location: ../view/pedido.php");
        exit;
    } else {
        // echo "Usuario o password incorrectos <br>";
        header("Location: ../view/loginError.php");
        exit;
        //header("Location: ../view/errLogin.php");
    }


?>