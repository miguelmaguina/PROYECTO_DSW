<?php

$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["email"])){
        alerta("Se requiere el email");
    }else{
        $email=test_input($_POST["email"]);
    }

    if(empty($_POST["password"])){
        alerta("Se requiere el contrasena");
    }else{
        $contrasena=test_input($_POST["password"]);
    }

    $clienteDAO=new ClienteDAO();

    if($clienteDAO->verificaEmail($email)==1){
        if($clienteDAO->verificaLogin($email,$contrasena)==1){
            exito("Sesion iniciada");
            header("Location: ../index.php");
            exit();

        }else{
            alerta("Usuario o contraseña incorrecta, cliente");
        }
    }else{
        alerta("Email no registrado, registrelo por favor, cliente");
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>