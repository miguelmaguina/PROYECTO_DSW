<?php

//Llamando a una pequeña conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyfinal_dsw_g1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nombre=$precio=$descripcion=$categoria=$subcategoria=$descuento=$fecha=$emprendimiento=$disponibilidad=$foto1=$foto2=$foto3="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["idP_Aux"])){
        echo ("Se requiere el codigo");
    }else{
        $id=test_input($_POST["idP_Aux"]);
    }

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

    //$_POST["categoria"] ya toma un valor entre 1,2,3 y 4
    if(empty($_POST["categoria"])){
        echo ("Se requiere una categoria");
    }else{
        
        $categoria_nombre = test_input($_POST["categoria"]);
    }

    //Aquí sí normal toma el string
    if(empty($_POST["subcategoria"])){
        echo ("Se requiere una subcategoria");
    }else{
        $subcategoria_nombre = test_input($_POST["subcategoria"]);
        $query = "SELECT ID_Subcategoria FROM Subcategoria WHERE Nombre = '$subcategoria_nombre'";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $subcategoria = $row["ID_Subcategoria"];
            echo ($subcategoria_nombre . " insertado");
        } else {
            echo ("La categoria no existe en la base de datos");
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
    
    //session_start();
    $emprendimiento=$_SESSION['id_e'];
    //$fecha=date('Y/m/d');
    echo $id ."holassss";
    $producto= new Producto();
    $productoDAO=new ProductoDAO();
    $producto=$productoDAO->listarPorIdProducto($id);
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



    if(($_FILES['upload-button1']['error'] == UPLOAD_ERR_NO_FILE) || ($_FILES['upload-button2']['error'] == UPLOAD_ERR_NO_FILE) || ($_FILES['upload-button3']['error'] == UPLOAD_ERR_NO_FILE) )
    {
        echo "NO SE SUBIO FOTO";
        $nuevo_nombre1=$producto->getFoto_Secundaria1();
        echo  $nuevo_nombre1;
        $nuevo_nombre2=$producto->getFoto_Secundaria2();
        echo  $nuevo_nombre2;
        $nuevo_nombre3=$producto->getFoto_Secundaria3();
        echo  $nuevo_nombre3;
    }
    else{
        echo "SE SUBIO FOTO";
        echo $archivo_ext1;
        echo "-";
        echo $archivo_ext2;
        echo "-";
        echo $archivo_ext3;
        move_uploaded_file($archivo_tmp1, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria1/'.$nuevo_nombre1); 
        move_uploaded_file($archivo_tmp2, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria2/'.$nuevo_nombre2);
        move_uploaded_file($archivo_tmp3, 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Image/Productos/Foto_Secundaria3/'.$nuevo_nombre3);
    }
    
        
    $prod=new Producto();
    
    $prod->setID_Producto($id);
    $prod->setNombre($nombre);
    echo $prod->getNombre();
    $prod->setPrecio($precio);
    echo $prod->getPrecio();
    $prod->setDescripcion($descripcion);
    echo $prod->getDescripcion();
    $prod->setID_Categoria($categoria_nombre);
    echo $prod->getID_Categoria();
    $prod->setID_Subcategoria($subcategoria);
    echo $prod->getID_Subcategoria();
    $prod->setDescuento($descuento);
    echo $prod->getDescuento();
    $prod->setFecha($fecha);
    echo $prod->getFecha();
    $prod->setID_Emprendimiento($emprendimiento);
    echo $prod->getID_Emprendimiento();
    $prod->setDisponibilidad($disponibilidad);
    echo $prod->getDisponibilidad();
    $prod->setFoto_Secundaria1($nuevo_nombre1);
    echo $prod->getFoto_Secundaria1();
    $prod->setFoto_Secundaria2($nuevo_nombre2);
    echo $prod->getFoto_Secundaria2();
    $prod->setFoto_Secundaria3($nuevo_nombre3);
    echo $prod->getFoto_Secundaria3();

    
    if($productoDAO->update($prod)==1){
        echo ("Producto actualizado exitosamente");
        $_SESSION['mensaje']="Actualizado exitosamente";
        header("Location: verProductoEmp2.php");
        exit();
    }
    else {
        echo "HUBO UN ERROR";
    }
    

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>