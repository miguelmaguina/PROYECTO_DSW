<?php

$name = $apellido = $email = $celular = $contrasena = $contrasena2 = $departamento = $usuario = $dni = $fecha = $nuevo_nombre = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        alerta("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
    }

    if(empty($_POST["apellido"])){
        alerta("Se requiere el apellido");
    }else{
        $apellido=test_input($_POST["apellido"]);
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

    if(empty($_POST["usuario"])){
        alerta("Se requiere el usuario");
    }else{
        $usuario=test_input($_POST["usuario"]);
    }

    if(empty($_POST["dni"])){
        alerta("Se requiere el dni");
    }else{
        $dni=test_input($_POST["dni"]);
    }
    
    // $apellido=$_POST["apellido"];
    // $email=$_POST["email"];
    // $celular=$_POST["celular"];
    // $contrasena=$_POST["password"];
    // $contrasena2=$_POST["password2"];
    // $departamento=$_POST["departamento"];
    // $usuario=$_POST["usuario"];
    // $dni=$_POST["dni"];
    $fecha=date('Y/m/d');

    $archivo_nombre = $_FILES['upload-button']['name'];
    $archivo_tipo = $_FILES['upload-button']['type'];
    //$archivo_tamano = $_FILES['upload-button']['size'];
    $archivo_tmp = $_FILES['upload-button']['tmp_name'];
      
    $archivo_ext = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    
    $nuevo_nombre = $usuario.'.'.$archivo_ext;
    

    $clienteDAO=new ClienteDAO();

    if($clienteDAO->verificaEmail($email)==0){
        if($clienteDAO->verificaUsuario($usuario)==0){
            if($contrasena==$contrasena2){
                if (move_uploaded_file($archivo_tmp, '../../tmp/usuario/'.$nuevo_nombre)) {
                    $client=new Cliente();
                    $client->setNombres($nombre);
                    $client->setApellidos($apellido);
                    $client->setEmail($email);
                    $client->setCelular($celular);
                    $client->setContrasena($contrasena);
                    $client->setDepartamento($departamento);
                    $client->setUsuario($usuario);
                    $client->setDNI($dni);
                    $client->setFecha_Creacion($fecha);
                    $client->setFoto_Perfil($nuevo_nombre);
                    $clienteDAO->insert($client);
                    exito("Cliente registrado exitosamente");
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

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>