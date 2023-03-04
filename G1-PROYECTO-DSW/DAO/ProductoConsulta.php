<?php

require_once "../../Conexion/Conexion.php";

class ProductoConsulta {
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

    //Consultas

    public function listarCategoriasxProductos(){
        $consulta1 = array();
        $consulta1s = array();

        $query = "SELECT c.Nombre AS categoria, COUNT(p.ID_Producto) AS cantidad 
          FROM Producto p 
          JOIN Categoria c ON p.ID_Categoria = c.ID_Categoria
          GROUP BY p.ID_Categoria";

        try{    
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_bind_result($stmt,$nombreCat, $numProds);

            while (mysqli_stmt_fetch($stmt)){

                $consulta1[0] = $nombreCat;
                $consulta1[1] = $numProds;

                echo $consulta1[0]." (".$consulta1[1].") <br>";
            } 

        } catch (Exception $e) {
            echo "Error al listar la categoria y la cantidad de productos: " . $e->getMessage();
            $consulta1 = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $consulta1;
    }

    public function listarSubcategoriasxProductos(){
        $consulta2 = array();

        $query = "SELECT c.Nombre AS subcategoria, COUNT(p.ID_Producto) AS cantidad 
          FROM Producto p 
          JOIN Subcategoria c ON p.ID_Subcategoria = c.ID_Subcategoria
          GROUP BY p.ID_Subcategoria";

        try{    
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_bind_result($stmt,$nombreCat, $numProds);

            while (mysqli_stmt_fetch($stmt)){

                $consulta2[0] = $nombreCat;
                $consulta2[1] = $numProds;

                echo $consulta2[0]." (".$consulta2[1].") <br>";
            } 

        } catch (Exception $e) {
            echo "Error al listar la subcategoria y la cantidad de productos: " . $e->getMessage();
            $consulta1 = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $consulta2;
    }

    public function listarEmprendimientosxProductos(){
        $consulta3 = array();

        $query = "SELECT c.Nombre AS emprendimiento, COUNT(p.ID_Producto) AS cantidad 
          FROM Producto p 
          JOIN Emprendimiento c ON p.ID_Emprendimiento = c.ID_Emprendimiento
          GROUP BY p.ID_Emprendimiento";

        try{    
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_bind_result($stmt,$nombreCat, $numProds);

            while (mysqli_stmt_fetch($stmt)){

                $consulta3[0] = $nombreCat;
                $consulta3[1] = $numProds;

                echo $consulta3[0]." (".$consulta3[1].") <br>";
            } 

        } catch (Exception $e) {
            echo "Error al listar el emprendimiento y la cantidad de productos: " . $e->getMessage();
            $consulta1 = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $consulta3;
    }


}