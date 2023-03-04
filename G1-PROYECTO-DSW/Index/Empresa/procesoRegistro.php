<?php

$name = $usuario = $email = $celular = $contrasena = $contrasena2 = $departamento = $direccion = $logo = $fecha = $web  = $facebook  = $instagram  = $otros = $nuevo_nombre = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        alerta("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
    }

    if(empty($_POST["usuario"])){
        alerta("Se requiere el usuario");
    }else{
        $usuario=test_input($_POST["usuario"]);
    }

    if(empty($_POST["email"])){
        alerta("Se requiere el email");
    }else{
        $email=test_input($_POST["email"]);
    }

    if(empty($_POST["celular"])){
        alerta("Se requiere el celular");
    }else{
        $celular=test_input($_POST["celular"]);
    }

    if(empty($_POST["password"])){
        alerta("Se requiere el contrasena");
    }else{
        $contrasena=test_input($_POST["password"]);
    }

    if(empty($_POST["password2"])){
        alerta("Se requiere el contrasena2");
    }else{
        $contrasena2=test_input($_POST["password2"]);
    }

    if(empty($_POST["departamento"])){
        alerta("Se requiere el departamento");
    }else{
        $departamento=test_input($_POST["departamento"]);
    }

    if(empty($_POST["direccion"])){
        alerta("Se requiere el direccion");
    }else{
        $direccion=test_input($_POST["direccion"]);
    }

    if(!empty($_POST["web"])){
        $web=test_input($_POST["web"]);
    }

    if(!empty($_POST["facebook"])){
        $facebook=test_input($_POST["facebook"]);
    }

    if(!empty($_POST["instagram"])){
        $instagram=test_input($_POST["instagram"]);
    }

    if(!empty($_POST["otros"])){
        $otros=test_input($_POST["otros"]);
    }
    
    $fecha=date('Y/m/d');

    $archivo_nombre = $_FILES['upload-button']['name'];
    $archivo_tipo = $_FILES['upload-button']['type'];
    //$archivo_tamano = $_FILES['upload-button']['size'];
    $archivo_tmp = $_FILES['upload-button']['tmp_name'];
      
    $archivo_ext = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    
    $nuevo_nombre = $usuario.'.'.$archivo_ext;
    

    $emprendimientoDAO=new EmprendimientoDAO();

if($archivo_nombre=='' || $archivo_nombre==null){
    if($emprendimientoDAO->verificaEmail($email)==0){
        if($emprendimientoDAO->verificaUsuario($usuario)==0){
            if($contrasena==$contrasena2){
                if (move_uploaded_file($archivo_tmp, '../../tmp/empresa/'.$nuevo_nombre)) {
                    $empren=new Emprendimiento();
                    $empren->setNombre($nombre);
                    $empren->setUsuario($usuario);
                    $empren->setEmail($email);
                    $empren->setCelular($celular);
                    $empren->setContrasena($contrasena);
                    $empren->setDepartamento($departamento);
                    $empren->setDireccion($direccion);
                    $empren->setLogo($nuevo_nombre);
                    $empren->setFecha_Creacion($fecha);
                    $empren->setURL_Web($web);
                    $empren->setURL_Facebook($facebook);
                    $empren->setURL_Instagram($instagram);
                    $empren->setURL_Otros($otros);
                    $emprendimientoDAO->insert($empren);
                    exito("Emprendimiento registrado exitosamente");
                    header("Location: iniciarSesionEmp.php");
                    exit();
                } else {
                    peligro("Hubo un error al subir la imagen, vuelva a intentarlo");
                }

            }else{
                alerta("Las contraseñas no son iguales");
            }
        }else{
            alerta("El usuario ya existe");
        }
    }else{
        alerta("Email ya registrado");
    }
}else{
    alerta("Se requiere el logo");
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>