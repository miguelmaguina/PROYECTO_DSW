<?php

$name = $celular = $departamento = $direccion = $web = $facebook = $instagram = $otros = $fecha = $nuevo_nombre = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        alerta("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
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
    
    // $apellido=$_POST["apellido"];
    // $email=$_POST["email"];
    // $celular=$_POST["celular"];
    // $contrasena=$_POST["password"];
    // $contrasena2=$_POST["password2"];
    // $departamento=$_POST["departamento"];
    // $usuario=$_POST["usuario"];
    // $dni=$_POST["dni"];
    $fecha=$emprendimiento->getFecha_Creacion();

    $archivo_nombre = $_FILES['upload-button']['name'];
    $archivo_tipo = $_FILES['upload-button']['type'];
    //$archivo_tamano = $_FILES['upload-button']['size'];
    $archivo_tmp = $_FILES['upload-button']['tmp_name'];
      
    $archivo_ext = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    
    $nuevo_nombre = 'Logo_'.$emprendimiento->getID_Emprendimiento().'.'.$archivo_ext;

    if($archivo_nombre=='' || $archivo_nombre==null){
        $nuevo_nombre=$emprendimiento->getLogo();
    }else{
        move_uploaded_file($archivo_tmp, '../../Image/Emprendimientos/'.$nuevo_nombre);
    }
    
    
    
    $emprendimiento=new Emprendimiento();
    $emprendimiento->setNombre($nombre);
    $emprendimiento->setCelular($celular);
    $emprendimiento->setDepartamento($departamento);
    $emprendimiento->setDireccion($direccion);
    $emprendimiento->setFecha_Creacion($fecha);
    $emprendimiento->setLogo($nuevo_nombre);
    $emprendimiento->setURL_Web($web);
    $emprendimiento->setURL_Facebook($facebook);
    $emprendimiento->setURL_Instagram($instagram);
    $emprendimiento->setURL_Otros($otros);
    $emprendimiento->setID_Emprendimiento($_SESSION['id_e']);
    $emprendimientoDAO->update($emprendimiento);
    $_SESSION['foto_c']=$nuevo_nombre;
    exito("Actualizado exitosamente");
    $_SESSION['mensaje']="Actualizado exitosamente";
    header("Location: actualizaEmprendimiento.php");
    exit();

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>