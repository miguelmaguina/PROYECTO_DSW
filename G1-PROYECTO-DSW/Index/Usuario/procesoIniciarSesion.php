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

        }else{
            alerta("Usuario o contraseña incorrecta");
        }
    }else{
        alerta("Email no registrado, registrelo por favor");
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function alerta($mensaje){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i> '.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

function peligro($mensaje){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

function info($mensaje){
    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-info-circle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
function exito($mensaje){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

?>