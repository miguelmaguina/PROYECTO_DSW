<?php

include "../Conexion/Conexion.php";
include "../Clases/SubCategoria.php";

class SubCategoriaDAO {
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
        $subcategorias = array();
        $query = "SELECT * FROM subcategoria";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_SubCategoria, $ID_Categoria, $Nombre, $Descripcion);

            while (mysqli_stmt_fetch($stmt)) {
                $subcategoria = new SubCategoria();
                $subcategoria->setID_SubCategoria($ID_SubCategoria);
                $subcategoria->setID_Categoria($ID_Categoria);
                $subcategoria->setNombre($Nombre);
                $subcategoria->setDescripcion($Descripcion); 

                $subcategorias[] = $subcategoria;
            }

        } catch (Exception $e) {
            echo "Error al listar subcategorias: " . $e->getMessage();
            $subcategorias = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $subcategorias;
    }
    
    public function insert(Subcategoria $subcategoria){

        $query = "INSERT INTO Subcategoria(ID_Categoria,Nombre, Descripcion) VALUES (?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Categoria = $categoria->getID_Categoria(); //i
            $ID_Categoria =  $subcategoria->getID_Categoria();//i
            $Nombre = $subcategoria->getNombre(); //s
            $Descripcion = $subcategoria->getDescripcion(); //s            

            mysqli_stmt_bind_param($stmt, "iss", $ID_Categoria,$Nombre, $Descripcion);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al insertar categoria: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function update(SubCategoria $subcategoria) {
        
        $query = "UPDATE subcategoria SET ID_Categoria=?, Nombre=?, Descripcion=? WHERE ID_Categoria=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $ID_Categoria = $subcategoria->getID_Categoria();
            $Nombre = $subcategoria->getNombre(); //s
            $Descripcion = $subcategoria->getDescripcion(); //s
            
            $ID_SubCategoria = $subcategoria->getID_SubCategoria();

            mysqli_stmt_bind_param($stmt, "issi", $ID_Categoria,$Nombre, $Descripcion);
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
        $query = "DELETE FROM SubCategoria WHERE ID_SubCategoria=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "s", $ID_SubCategoria);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar subcategoria: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdSubCategoria($ID_SubCategoria_Buscado){

        $query = "SELECT * FROM SubCategoria WHERE ID_SubCategoria=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_SubCategoria_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_SubCategoria, $ID_Categoria, $Nombre, $Descripcion);

            if (mysqli_stmt_fetch($stmt)) {
                $subcategoria = new SubCategoria();
                $ID_SubCategoria = $subcategoria->getID_SubCategoria(); //i
                $ID_Categoria = $subcategoria->getID_Categoria(); //i
                $Nombre = $subcategoria->getNombre(); //s
                $Descripcion = $subcategoria->getDescripcion(); //s                
            }

        } catch (Exception $e) {
            echo "Error al listar 1 subcategoria: " . $e->getMessage();
            $subcategoria = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $subcategoria;
    }


}

?>