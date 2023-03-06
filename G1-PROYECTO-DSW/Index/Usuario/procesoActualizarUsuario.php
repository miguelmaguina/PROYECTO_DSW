<?php

$name = $apellido = $celular = $departamento = $dni = $fecha = $nuevo_nombre = "";

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

    if(empty($_POST["celular"])){
        alerta("Se requiere el celular");
    }else{
        $celular=test_input($_POST["celular"]);
    }

    if(empty($_POST["departamento"])){
        alerta("Se requiere el departamento");
    }else{
        $departamento=test_input($_POST["departamento"]);
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
    $fecha=$cliente->getFecha_Creacion();

    $archivo_nombre = $_FILES['upload-button']['name'];
    $archivo_tipo = $_FILES['upload-button']['type'];
    //$archivo_tamano = $_FILES['upload-button']['size'];
    $archivo_tmp = $_FILES['upload-button']['tmp_name'];
      
    $archivo_ext = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    
    $nuevo_nombre = 'fotoPerfil_'.$cliente->getID_Cliente().'.'.$archivo_ext;

    if($archivo_nombre=='' || $archivo_nombre==null){
        $nuevo_nombre=$cliente->getFoto_Perfil();
    }else{
        move_uploaded_file($archivo_tmp, '../../Image/Clientes/'.$nuevo_nombre);
    }
    
    
    
    $client=new Cliente();
    $client->setNombres($nombre);
    $client->setApellidos($apellido);
    $client->setCelular($celular);
    $client->setDepartamento($departamento);
    $client->setDNI($dni);
    $client->setFecha_Creacion($fecha);
    $client->setFoto_Perfil($nuevo_nombre);
    $client->setID_Cliente($_SESSION['id_c']);
    $clienteDAO->update($client);
    $_SESSION['foto_c']=$nuevo_nombre;
    exito("Actualizado exitosamente");
    header("Location: actualizaUsuario.php");
    exit();

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>