<?php
require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/DAO/ProductoDAO.php';
require "C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Producto.php";

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
        //$categoria=test_input($_POST["categoria"]);
        if ($_POST["categoria"]=='Hogar y Decoración'){
            $categoria=test_input('1');
        }
        else if ($_POST["categoria"]=='Bebidas'){
            $categoria=test_input('2');
        }
        else if ($_POST["categoria"]=='Alimentos'){
            $categoria=test_input('3');
        }
        else if ($_POST["categoria"]=='Moda y Accesorios'){
            $categoria=test_input('4');
        }
    }

    if(empty($_POST["subcategoria"])){
        echo ("Se requiere una subcategoria");
    }else{
        //$subcategoria=test_input($_POST["subcategoria"]);

        //Hogar y Decoración
        if ($_POST["subcategoria"]=='Utensilios de cocina'){
            $subcategoria=test_input('1');
        }
        else if ($_POST["subcategoria"]=='Decoración'){
            $subcategoria=test_input('2');
        }
        else if ($_POST["subcategoria"]=='Joyería'){
            $subcategoria=test_input('3');
        }
        else if ($_POST["subcategoria"]=='Jardinería'){
            $subcategoria=test_input('4');
        }

        //Bebidas
        if ($_POST["subcategoria"]=='Piscos'){
            $subcategoria=test_input('5');
        }
        else if ($_POST["subcategoria"]=='Vinos'){
            $subcategoria=test_input('6');
        }
        else if ($_POST["subcategoria"]=='Cafes'){
            $subcategoria=test_input('7');
        }
        else if ($_POST["subcategoria"]=='Infusiones'){
            $subcategoria=test_input('8');
        }

        //Alimentos
        if ($_POST["subcategoria"]=='Quesos'){
            $subcategoria=test_input('9');
        }
        else if ($_POST["subcategoria"]=='Yogurts'){
            $subcategoria=test_input('10');
        }
        else if ($_POST["subcategoria"]=='Chocolates'){
            $subcategoria=test_input('11');
        }
        else if ($_POST["subcategoria"]=='Verduras'){
            $subcategoria=test_input('12');
        }
        else if ($_POST["subcategoria"]=='Frutas'){
            $subcategoria=test_input('13');
        }
        else if ($_POST["subcategoria"]=='Alimentos organicos'){
            $subcategoria=test_input('14');
        }
        else if ($_POST["subcategoria"]=='Snacks'){
            $subcategoria=test_input('15');
        }

        //Moda y Accesorios
        if ($_POST["subcategoria"]=='Carteras, bolsos y accesorios'){
            $subcategoria=test_input('16');
        }
        else if ($_POST["subcategoria"]=='Textil decorativo'){
            $subcategoria=test_input('17');
        }
        else if ($_POST["subcategoria"]=='Cómputo y de Escritorio'){
            $subcategoria=test_input('18');
        }
        else if ($_POST["subcategoria"]=='Complementos'){
            $subcategoria=test_input('19');
        }
        else if ($_POST["subcategoria"]=='Gorros y sombreros'){
            $subcategoria=test_input('20');
        }
        else if ($_POST["subcategoria"]=='Calzados'){
            $subcategoria=test_input('21');
        }
        else if ($_POST["subcategoria"]=='Bufandas y pashminas'){
            $subcategoria=test_input('22');
        }
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

    //if(empty($_POST["upload-button1"])){
    //    echo ("Se requiere una foto1");
    //}else{
    //    $foto1=test_input($_POST["upload-button1"]);
    //}

    //if(empty($_POST["upload-button2"])){
    //    echo ("Se requiere una foto2");
    //}else{
    //    $foto2=test_input($_POST["upload-button2"]);
    //}

    //if(empty($_POST["upload-button3"])){
    //    echo ("Se requiere una foto3");
    //}else{
    //    $foto3=test_input($_POST["upload-button3"]);
    //}
    
    session_start();
    $emprendimiento=$_SESSION['id_e'];
    //$fecha=date('Y/m/d');
    $productoDAO=new ProductoDAO();
    $id=$productoDAO->obtenerUltimoId()+1;

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
        if (move_uploaded_file($archivo_tmp1, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria1/'.$nuevo_nombre1) && move_uploaded_file($archivo_tmp2, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria2/'.$nuevo_nombre2) && move_uploaded_file($archivo_tmp3, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria3/'.$nuevo_nombre3))
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
            $prod->setFoto_Secundaria1($nuevo_nombre1);
            $prod->setFoto_Secundaria2($nuevo_nombre2);
            $prod->setFoto_Secundaria3($nuevo_nombre3);

            $productoDAO->insert($prod);
            echo ("Producto registrado exitosamente");
            //header("Location: indexEmpresa.php");
            exit();
        }
        else{
            echo("Hubo un error al subir las imágenes");
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