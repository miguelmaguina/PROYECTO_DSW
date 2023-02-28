<?php

include "../Conexion/Conexion.php";
include "../Clases/Categoria.php";

class CategoriaDAO {
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
        $categorias = array();
        $query = "SELECT * FROM categoria";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Categoria, $Nombre, $Descripcion);

            while (mysqli_stmt_fetch($stmt)) {
                $categoria = new Categoria();
                $categoria->setID_Categoria($ID_Categoria);
                $categoria->setNombre($Nombre);
                $categoria->setDescripcion($Descripcion);                
                $categorias[] = $categoria;
            }

        } catch (Exception $e) {
            echo "Error al listar categorias: " . $e->getMessage();
            $categorias = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $categorias;
    }

    /*
    Nota: El primero parametro de la funcion 'bind_param' requiere que se especifique el tipo de elemento que se le pasa.
        i: para variables de tipo entero
        d: para variables de tipo punto flotante
        s: para variables de tipo cadena (string)
        b: para variables de tipo blob
        ETC...
    */

    public function insert(Categoria $categoria){

        $query = "INSERT INTO Categoria(Nombre, Descripcion) VALUES (?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Categoria = $categoria->getID_Categoria(); //i
            $Nombre = $categoria->getNombre(); //s
            $Descripcion = $categoria->getDescripcion(); //s            

            mysqli_stmt_bind_param($stmt, "sssssssssssss", $Nombre, $Descripcion);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al insertar categoria: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function update(Emprendimiento $categoria) {
        
        $query = "UPDATE categoria SET Nombre=?, Descripcion=? WHERE ID_Categoria=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $Nombre = $categoria->getNombre(); //s
            $Descripcion = $categoria->getUsuario(); //s            

            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $Nombre, $Descripcion);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al actualizar categoria: " . $e->getMessage();
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function delete($ID_Categoria) {
        $query = "DELETE FROM Categoria WHERE ID_Categoria=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "s", $ID_Categoria);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar categoria: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdCategoria($ID_Categoria_Buscado){

        $query = "SELECT * FROM Categoria WHERE ID_Categoria=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Categoria_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Categoria, $Nombre, $Descripcion);

            if (mysqli_stmt_fetch($stmt)) {
                $categoria = new Categoria();
                $ID_Categoria = $categoria->getID_Categoria(); //i
                $Nombre = $categoria->getNombre(); //s
                $Descripcion = $categoria->getDescripcion(); //s                
            }

        } catch (Exception $e) {
            echo "Error al listar 1 categoria: " . $e->getMessage();
            $categoria = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $categoria;
    }

}

?>