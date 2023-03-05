<?php

$nombre=$precio=$descripcion=$categoria=$subcategoria=$descuento=$fecha=$emprendimiento=$disponibilidad=$foto1=$foto2=$foto3="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["nombre"])){
        alerta("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
    }

    if(empty($_POST["precio"])){
        alerta("Se requiere el precio");
    }else{
        $nombre=test_input($_POST["precio"]);
    }

    if(empty($_POST["descripcion"])){
        alerta("Se requiere una descripcion");
    }else{
        $nombre=test_input($_POST["descripcion"]);
    }

    if(empty($_POST["categoria"])){
        alerta("Se requiere una categoria");
    }else{
        $nombre=test_input($_POST["categoria"]);
    }

    if(empty($_POST["subcategoria"])){
        alerta("Se requiere una subcategoria");
    }else{
        $nombre=test_input($_POST["subcategoria"]);
    }

    if(!empty($_POST["dscto"])){
        $facebook=test_input($_POST["dscto"]);
    }

    if(empty($_POST["fecha"])){
        alerta("Se requiere una fechae");
    }else{
        $nombre=test_input($_POST["fecha"]);
    }

    if(empty($_POST["emprendimiento"])){
        alerta("Se requiere el emprendimiento");
    }else{
        $nombre=test_input($_POST["emprendimiento"]);
    }

    if(empty($_POST["disp"])){
        alerta("Se requiere la disponibilidad");
    }else{
        $nombre=test_input($_POST["disp"]);
    }

    if(empty($_POST["upload-button1"])){
        alerta("Se requiere una foto");
    }else{
        $nombre=test_input($_POST["upload-button1"]);
    }

    if(empty($_POST["upload-button2"])){
        alerta("Se requiere una foto");
    }else{
        $nombre=test_input($_POST["upload-button2"]);
    }

    if(empty($_POST["upload-button3"])){
        alerta("Se requiere una foto");
    }else{
        $nombre=test_input($_POST["upload-button3"]);
    }

    $fecha=date('Y/m/d');

    $productoDAO=new ProductoDAO();
    $id=$productoDAO->obtenerUltimoId();
    $id=$id+1;

    //Foto 1
    $archivo_nombre1 = $_FILES['upload-button1']['name'];
    $archivo_tipo1 = $_FILES['upload-button1']['type'];
    //$archivo_tamano = $_FILES['upload-button1']['size'];
    $archivo_tmp1 = $_FILES['upload-button1']['tmp_name'];
      
    $archivo_ext1 = pathinfo($archivo_nombre1, PATHINFO_EXTENSION);
    
    $nuevo_nombre1 = 'logo1_'.$id.'.'.$archivo_ext1;

    //Foto 2
    $archivo_nombre2 = $_FILES['upload-button1']['name'];
    $archivo_tipo2 = $_FILES['upload-button1']['type'];
    //$archivo_tamano1 = $_FILES['upload-button1']['size'];
    $archivo_tmp2 = $_FILES['upload-button1']['tmp_name'];
      
    $archivo_ext2 = pathinfo($archivo_nombre2, PATHINFO_EXTENSION);
    
    $nuevo_nombre2 = 'logo2_'.$id.'.'.$archivo_ext2;

    //Foto 3
    $archivo_nombre3 = $_FILES['upload-button3']['name'];
    $archivo_tipo3 = $_FILES['upload-button3']['type'];
    //$archivo_tamano3 = $_FILES['upload-button3']['size'];
    $archivo_tmp3 = $_FILES['upload-button3']['tmp_name'];
      
    $archivo_ext3 = pathinfo($archivo_nombre3, PATHINFO_EXTENSION);
    
    $nuevo_nombre3 = 'logo3_'.$id.'.'.$archivo_ext3;

    $productoDAO=new ProductoDAO();

    if(($archivo_nombre1!='' || $archivo_nombre1!=null) && ($archivo_nombre2!='' || $archivo_nombre2!=null) && ($archivo_nombre3!='' || $archivo_nombre3!=null))
    {
        if (move_uploaded_file($archivo_tmp1, '../../Image/Productos/Foto_Secundaria1'.$nuevo_nombre1) && move_uploaded_file($archivo_tmp2, '../../Image/Productos/Foto_Secundaria2'.$nuevo_nombre2) && move_uploaded_file($archivo_tmp3, '../../Image/Productos/Foto_Secundaria3'.$nuevo_nombre3))
        {
            $prod=new Producto();

            $prod->setNombre($nombre);
            $prod->setPrecio($precio);
            $prod->setDescripcion($descripcion);
            $prod->setID_Categoria($categoria);
            $prod->setID_Subcategoria($subcategoria);
            $prod->setDescuento($descuento);
            $prod->setFecha($fecha);
            $prod->setID_Emprendimiento($emprendimiento);
            $prod->setDisponibilidad($disponibilidad);
            $prod->setFoto_Secundaria1($foto1);
            $prod->setFoto_Secundaria2($foto2);
            $prod->setFoto_Secundaria3($foto3);

            $productoDAO->insert($prod);
            exito("Producto registrado exitosamente");
            header("Location: indexEmpresa.php");
            exit();
        }
        else{
            peligro("Hubo un error al subir las imágnenes");
        }
    }
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>