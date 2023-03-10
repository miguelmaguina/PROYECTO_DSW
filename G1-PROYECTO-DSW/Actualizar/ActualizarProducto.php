<?php
require_once '../../DAO/ProductoDAO.php';
require_once "../../Clases/Producto.php";

$nombre=$precio=$descripcion=$categoria=$subcategoria=$descuento=$fecha=$emprendimiento=$disponibilidad=$foto1=$foto2=$foto3="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        echo ("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
    }

    if(empty($_POST["precio"])){
        echo ("Se requiere el precio");
    }else{
        $precio=test_input($_POST["precio"]);
    }

    if(empty($_POST["descripcion"])){
        echo ("Se requiere una descripcion");
    }else{
        $descripcion=test_input($_POST["descripcion"]);
    }

    if(empty($_POST["categoria"])){
        echo ("Se requiere una categoria");
    }else{
        $categoria=test_input($_POST["categoria"]);
    }

    if(empty($_POST["subcategoria"])){
        echo ("Se requiere una subcategoria");
    }else{
        $subcategoria=test_input($_POST["subcategoria"]);
    }

    if(!empty($_POST["dscto"])){
        $descuento=test_input($_POST["dscto"]);
    }

    if(empty($_POST["fecha"])){
        echo ("Se requiere una fecha");
    }else{
        $fecha=test_input($_POST["fecha"]);
    }

    if(empty($_POST["disp"])){
        echo ("Se requiere la disponibilidad");
    }else{
        $disponibilidad=test_input($_POST["disp"]);
    }

    if(empty($_POST["upload-button1"])){
        echo ("Se requiere una foto1");
    }else{
        $foto1=test_input($_POST["upload-button1"]);
    }

    if(empty($_POST["upload-button2"])){
        echo ("Se requiere una foto2");
    }else{
        $foto2=test_input($_POST["upload-button2"]);
    }

    if(empty($_POST["upload-button3"])){
        echo ("Se requiere una foto3");
    }else{
        $foto3=test_input($_POST["upload-button3"]);
    }
    
    session_start();
    $emprendimiento=$_SESSION['id_e'];
    $fecha=date('Y/m/d');
    $productoDAO=new ProductoDAO();

    //Foto 1
    $archivo_nombre1 = $_FILES['upload-button1']['name'];
    $archivo_tipo1 = $_FILES['upload-button1']['type'];
    $archivo_tmp1 = $_FILES['upload-button1']['tmp_name'];
    $archivo_ext1 = pathinfo($archivo_nombre1, PATHINFO_EXTENSION);
    $nuevo_nombre1 = 'Foto_Secundaria1_'.$id.'.'.$archivo_ext1;

    //Foto 2
    $archivo_nombre2 = $_FILES['upload-button2']['name'];
    $archivo_tipo2 = $_FILES['upload-button2']['type'];
    $archivo_tmp2 = $_FILES['upload-button2']['tmp_name'];
    $archivo_ext2 = pathinfo($archivo_nombre2, PATHINFO_EXTENSION);
    $nuevo_nombre2 = 'Foto_Secundaria2_'.$id.'.'.$archivo_ext2;

    //Foto 3
    $archivo_nombre3 = $_FILES['upload-button3']['name'];
    $archivo_tipo3 = $_FILES['upload-button3']['type'];
    $archivo_tmp3 = $_FILES['upload-button3']['tmp_name'];
    $archivo_ext3 = pathinfo($archivo_nombre3, PATHINFO_EXTENSION);
    $nuevo_nombre3 = 'Foto_Secundaria3_'.$id.'.'.$archivo_ext3;

    if(($archivo_nombre1!='' || $archivo_nombre1!=null) && ($archivo_nombre2!='' || $archivo_nombre2!=null) && ($archivo_nombre3!='' || $archivo_nombre3!=null) && $id>0)
    {
        if (move_uploaded_file($archivo_tmp1, '../../Image/Productos/Foto_Secundaria1/'.$nuevo_nombre1) && move_uploaded_file($archivo_tmp2, '../../Image/Productos/Image/Productos/Foto_Secundaria2/'.$nuevo_nombre2) && move_uploaded_file($archivo_tmp3, '../../Image/Productos/Image/Productos/Foto_Secundaria3/'.$nuevo_nombre3))
        {
            $ID_producto_actu=new Producto();

            $ID_producto_actu->setNombre($nombre);
            $ID_producto_actu->setPrecio($precio);
            $ID_producto_actu->setDescripcion($descripcion);
            $ID_producto_actu->setID_Categoria($categoria);
            $ID_producto_actu->setID_Subcategoria($subcategoria);
            $ID_producto_actu->setDescuento($descuento);
            $ID_producto_actu->setFecha($fecha);
            $ID_producto_actu->setID_Emprendimiento($emprendimiento);
            $ID_producto_actu->setDisponibilidad($disponibilidad);
            $ID_producto_actu->setFoto_Secundaria1($nuevo_nombre1);
            $ID_producto_actu->setFoto_Secundaria2($nuevo_nombre2);
            $ID_producto_actu->setFoto_Secundaria3($nuevo_nombre3);
        }
            $productoDAO->update($ID_producto_actu);
            echo ("Producto registrado exitosamente");
            //header("Location: indexEmpresa.php");
            exit();
        }
        else{
            echo("Hubo un error al subir las im??genes");
        }
    }



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>