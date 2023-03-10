<?php

if(file_exists("../Conexion/Conexion.php")){
    require_once "../Conexion/Conexion.php";
}elseif(file_exists("../../Conexion/Conexion.php")){
    require_once "../../Conexion/Conexion.php";
}
else{
    require_once "C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Conexion/Conexion.php";
}


if(file_exists("../Clases/Producto.php")){
    require_once "../Clases/Producto.php";
}elseif(file_exists("../../Clases/Producto.php")){
    require_once "../../Clases/Producto.php";
}
else{
    require_once "C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Producto.php";
}


class ProductoDAO
{
    //Atributos
    private $conexion;

    //Constructor
    public function __construct(){
        $this->conexion = new Conexion();
    }

    //Destructor (Se ejecutará al final del script)
    public function __destruct() {
        $this->conexion->close();
    }

    //CRUD
    public function listar(){
        $productos = array();
        $query = "SELECT * FROM producto";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto, $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);

            while (mysqli_stmt_fetch($stmt)) {
                $producto = new Producto();

                $producto->setID_Producto($ID_Producto);
                $producto->setNombre($Nombre);
                $producto->setPrecio($Precio);
                $producto->setDescripcion($Descripcion);
                $producto->setID_Categoria($ID_Categoria);
                $producto->setID_Subcategoria($ID_Subcategoria);
                $producto->setDescuento($Descuento);
                $producto->setFecha($Fecha);
                $producto->setID_Emprendimiento($ID_Emprendimiento);
                $producto->setDisponibilidad($Disponibilidad);
                $producto->setFoto_Secundaria1($Foto_Secundaria1);
                $producto->setFoto_Secundaria2($Foto_Secundaria2);
                $producto->setFoto_Secundaria3($Foto_Secundaria3);


                $productos[] = $producto;
            }

        } catch (Exception $e) {
            echo "Error al listar productos: " . $e->getMessage();
            $productos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $productos;
    }

    /*
    Nota: El primero parametro de la funcion 'bind_param' requiere que se especifique el tipo de elemento que se le pasa.
        i: para variables de tipo entero
        d: para variables de tipo punto flotante
        s: para variables de tipo cadena (string)
        b: para variables de tipo blob
        ETC...
    */

    public function insert(Producto $producto){

        $query = "INSERT INTO Producto(Nombre, Precio, Descripcion, ID_Categoria, ID_Subcategoria, Descuento, Fecha, ID_Emprendimiento, Disponibilidad, Foto_Secundaria1, Foto_Secundaria2, Foto_Secundaria3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Producto = $producto->getID_Producto(); //i
            $Nombre=$producto->getNombre(); //s
            $Precio=$producto->getPrecio(); //d
            $Descripcion=$producto->getDescripcion(); //s
            $ID_Categoria=$producto->getID_Categoria(); //i
            $ID_Subcategoria=$producto->getID_Subcategoria(); //i
            $Descuento=$producto->getDescuento(); //d
            $Fecha=$producto->getFecha(); //s
            $ID_Emprendimiento=$producto->getID_Emprendimiento(); //i
            $Disponibilidad=$producto->getDisponibilidad(); //i
            $Foto_Secundaria1=$producto->getFoto_Secundaria1(); //s
            $Foto_Secundaria2=$producto->getFoto_Secundaria2(); //s
            $Foto_Secundaria3=$producto->getFoto_Secundaria3(); //s
            

            mysqli_stmt_bind_param($stmt, "sdsiidsiisss", $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al insertar producto: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }
    
    public function update(Producto $producto) {
        $r=0;
        $query = "UPDATE Producto SET Nombre=?, Precio=?, Descripcion=?, ID_Categoria=?, ID_Subcategoria=?, Descuento=?, Fecha=?, ID_Emprendimiento=?, Disponibilidad=?, Foto_Secundaria1=?, Foto_Secundaria2=?, Foto_Secundaria3=?  WHERE ID_Producto=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $Nombre=$producto->getNombre(); //s
            $Precio=$producto->getPrecio(); //d
            $Descripcion=$producto->getDescripcion(); //s
            $ID_Categoria=$producto->getID_Categoria(); //i
            $ID_Subcategoria=$producto->getID_Subcategoria(); //i
            $Descuento=$producto->getDescuento(); //d
            $Fecha=$producto->getFecha(); //s
            $ID_Emprendimiento=$producto->getID_Emprendimiento(); //i
            $Disponibilidad=$producto->getDisponibilidad(); //i
            $Foto_Secundaria1=$producto->getFoto_Secundaria1(); //s
            $Foto_Secundaria2=$producto->getFoto_Secundaria2(); //s
            $Foto_Secundaria3=$producto->getFoto_Secundaria3(); //s
            $ID_Producto = $producto->getID_Producto(); //i

            mysqli_stmt_bind_param($stmt, "sdsiidsiisssi", $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3, $ID_Producto);
            mysqli_stmt_execute($stmt);
            $r=1;
        } catch (Exception $e) {
            echo "Error al actualizar producto: " . $e->getMessage();
            $r=0;
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
        return $r;
    }

    public function delete($ID_Producto) {
        $query = "DELETE FROM Producto WHERE ID_Producto=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Producto);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar producto: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdProducto($ID_Producto_Buscado){

        $query = "SELECT * FROM Producto WHERE ID_Producto=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Producto_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto, $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);

            if (mysqli_stmt_fetch($stmt)) {
                $producto = new Producto();


                $producto->setID_Producto($ID_Producto);
                $producto->setNombre($Nombre);
                $producto->setPrecio($Precio);
                $producto->setDescripcion($Descripcion);
                $producto->setID_Categoria($ID_Categoria);
                $producto->setID_Subcategoria($ID_Subcategoria);
                $producto->setDescuento($Descuento);
                $producto->setFecha($Fecha);
                $producto->setID_Emprendimiento($ID_Emprendimiento);
                $producto->setDisponibilidad($Disponibilidad);
                $producto->setFoto_Secundaria1($Foto_Secundaria1);
                $producto->setFoto_Secundaria2($Foto_Secundaria2);
                $producto->setFoto_Secundaria3($Foto_Secundaria3);
            }

        } catch (Exception $e) {
            echo "Error al listar 1 producto: " . $e->getMessage();
            $producto = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $producto;
    }

    public function listarProductosPopulares(){

        $query = "SELECT * FROM Producto WHERE ID_Producto IN  (8,14,65,23,41,58)";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto, $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);

            while (mysqli_stmt_fetch($stmt)) {
                $producto = new Producto();

                $producto->setID_Producto($ID_Producto);
                $producto->setNombre($Nombre);
                $producto->setPrecio($Precio);
                $producto->setDescripcion($Descripcion);
                $producto->setID_Categoria($ID_Categoria);
                $producto->setID_Subcategoria($ID_Subcategoria);
                $producto->setDescuento($Descuento);
                $producto->setFecha($Fecha);
                $producto->setID_Emprendimiento($ID_Emprendimiento);
                $producto->setDisponibilidad($Disponibilidad);
                $producto->setFoto_Secundaria1($Foto_Secundaria1);
                $producto->setFoto_Secundaria2($Foto_Secundaria2);
                $producto->setFoto_Secundaria3($Foto_Secundaria3);


                $productos[] = $producto;
            }

        } catch (Exception $e) {
            echo "Error al listar productos: " . $e->getMessage();
            $productos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $productos;
    }

    public function listarPorSubcategoria($ID_Subcategoria_Elegida){
        $productos = array();
        $query = "SELECT * FROM Producto WHERE ID_Subcategoria=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Subcategoria_Elegida);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto, $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);

            while (mysqli_stmt_fetch($stmt)) {
                $producto = new Producto();


                $producto->setID_Producto($ID_Producto);
                $producto->setNombre($Nombre);
                $producto->setPrecio($Precio);
                $producto->setDescripcion($Descripcion);
                $producto->setID_Categoria($ID_Categoria);
                $producto->setID_Subcategoria($ID_Subcategoria);
                $producto->setDescuento($Descuento);
                $producto->setFecha($Fecha);
                $producto->setID_Emprendimiento($ID_Emprendimiento);
                $producto->setDisponibilidad($Disponibilidad);
                $producto->setFoto_Secundaria1($Foto_Secundaria1);
                $producto->setFoto_Secundaria2($Foto_Secundaria2);
                $producto->setFoto_Secundaria3($Foto_Secundaria3);
            }

        } catch (Exception $e) {
            echo "Error al listar 1 producto: " . $e->getMessage();
            $productos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $productos;
    }

    public function listarPorEmprendimiento(){
        $productos = array();
        $query = "SELECT * FROM Producto WHERE ID_Emprendimiento ={$_SESSION['id_e']}";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto, $Nombre, $Precio, $Descripcion, $ID_Categoria, $ID_Subcategoria, $Descuento, $Fecha, $ID_Emprendimiento, $Disponibilidad, $Foto_Secundaria1, $Foto_Secundaria2, $Foto_Secundaria3);

            while (mysqli_stmt_fetch($stmt)) {
                $producto = new Producto();

                $producto->setID_Producto($ID_Producto);
                $producto->setNombre($Nombre);
                $producto->setPrecio($Precio);
                $producto->setDescripcion($Descripcion);
                $producto->setID_Categoria($ID_Categoria);
                $producto->setID_Subcategoria($ID_Subcategoria);
                $producto->setDescuento($Descuento);
                $producto->setFecha($Fecha);
                $producto->setID_Emprendimiento($ID_Emprendimiento);
                $producto->setDisponibilidad($Disponibilidad);
                $producto->setFoto_Secundaria1($Foto_Secundaria1);
                $producto->setFoto_Secundaria2($Foto_Secundaria2);
                $producto->setFoto_Secundaria3($Foto_Secundaria3);


                $productos[] = $producto;
            }

        } catch (Exception $e) {
            echo "Error al listar productos: " . $e->getMessage();
            $productos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $productos;
    }

    public function contarProductos() {
        $query = "SELECT COUNT(*) FROM Producto WHERE Disponibilidad = 1";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            $numProd = 0;

            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_bind_result($stmt,$numProd);

            while (mysqli_stmt_fetch($stmt)) {  
                
            }

        } catch (Exception $e) {
            echo "Error al contar productos: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $numProd;
    }

    public function obtenerUltimoId(){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT MAX(ID_Producto) FROM producto";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto);

            if(mysqli_stmt_fetch($stmt)){
                $r=$ID_Producto;
            }

            
        }catch(Exception $e){
            echo $e->getMessage();
            echo "Error al obtener MaxID: " . $e->getMessage();
            $r = 0;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        
        return $r;
    }
}

?>