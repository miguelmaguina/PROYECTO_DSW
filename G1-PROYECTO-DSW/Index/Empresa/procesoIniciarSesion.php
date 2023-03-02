<?php

$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["email"])){
        alerta("Se requiere el email");
    }else{
        $email=test_input1($_POST["email"]);
    }

    if(empty($_POST["password"])){
        alerta("Se requiere el contrasena");
    }else{
        $contrasena=test_input1($_POST["password"]);
    }

    $cemprendimientoDAO=new EmprendimientoDAO();

    if($cemprendimientoDAO->verificaEmail($email)==1){
        if($cemprendimientoDAO->verificaLogin($email,$contrasena)==1){
            exito("Sesion iniciada, emprendimiento");

        }else{
            alerta("Usuario o contraseña incorrecta, emprendimiento");
        }
    }else{
        alerta("Email no registrado, registrelo por favor, emprendimiento");
    }

}

function test_input1($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>