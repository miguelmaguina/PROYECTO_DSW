<?php

//include "../Conexion/Conexion.php";
//include "../Clases/Lista_Favoritos.php";

class Lista_FavoritosDAO {
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
        $favoritos = array();
        $query = "SELECT * FROM Lista_Favoritos";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Lista_Favoritos, $ID_Cliente, $ID_Producto, $Fecha);

            while (mysqli_stmt_fetch($stmt)) {
                $favorito = new Lista_Favoritos();

                $favorito->setID_Lista_Favoritos($ID_Lista_Favoritos);
                $favorito->setID_Cliente($ID_Cliente);
                $favorito->setID_Producto($ID_Producto);
                $favorito->setFecha($Fecha);

                $favoritos[] = $favorito;
            }

        } catch (Exception $e) {
            echo "Error al listar la lista de favoritos: " . $e->getMessage();
            $favoritos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $favoritos;
    }

    public function insert(Lista_Favoritos $favorito){

        $query = "INSERT INTO Lista_Favoritos(ID_Cliente, ID_Producto, Fecha) VALUES (?,?,?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Lista_Favoritos=$favorito->getIdListaFavoritos(); //i
            $ID_Cliente=$favorito->getID_Cliente(); //i
            $ID_Producto=$favorito->getID_Producto(); //i
            $Fecha=$favorito->getFecha(); //s

            mysqli_stmt_bind_param($stmt, "iis", $ID_Cliente, $ID_Producto, $Fecha);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al insertar favorito: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function update(Lista_Favoritos $favorito) {
        
        $query = "UPDATE Lista_Favoritos SET ID_Cliente=?, ID_Producto=?, Fecha=?  WHERE ID_Lista_Favoritos=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $ID_Cliente=$favorito->getID_Cliente(); //i
            $ID_Producto=$favorito->getID_Producto(); //i
            $Fecha=$favorito->getFecha(); //s

            $ID_Lista_Favoritos=$favorito->getID_Lista_Favoritos();//i            
  
            mysqli_stmt_bind_param($stmt, "iisi", $ID_Cliente, $ID_Producto, $Fecha);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al actualizar la lista de favoritos: " . $e->getMessage();
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function delete($ID_Lista_Favoritos) {
        $query = "DELETE FROM Lista_Favoritos WHERE ID_Lista_Favoritos=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Lista_Favoritos);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar de la lista de productos: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdListaFavoritos($ID_Lista_Fav_Buscado){

        $query = "SELECT * FROM Lista_Favoritos WHERE ID_Lista_Favoritos=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Lista_Fav_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Lista_Favoritos, $ID_Cliente, $ID_Producto, $Fecha);

            if (mysqli_stmt_fetch($stmt)) {
                $favorito = new Lista_Favoritos();

                $ID_Lista_Favoritos = $favorito->getID_Lista_Favoritos(); //i
                $ID_Cliente=$favorito->getID_Cliente(); //i
                $ID_Producto=$favorito->getId_Producto(); //i
                $Fecha=$favorito->getFecha(); //s
            }

        } catch (Exception $e) {
            echo "Error al listar 1 itema de la lista de favoritos: " . $e->getMessage();
            $favorito = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $favorito;
    }

    public function listarPorIdCliente($idcliente){
        $query = "SELECT * FROM Lista_Favoritos WHERE ID_Cliente=?";
        $arrayFavorito=array();
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $idcliente);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Lista_Favoritos, $ID_Cliente, $ID_Producto, $Fecha);

            while(mysqli_stmt_fetch($stmt)) {
                $favorito = new Lista_Favoritos();
                // $ID_Producto=$favorito->getId_Producto(); //i
                // $Fecha=$favorito->getFecha(); //s
                $favorito->setID_Lista_Favoritos($ID_Lista_Favoritos);
                $favorito->setID_Cliente($ID_Cliente);
                $favorito->setID_Producto($ID_Producto);
                $favorito->setFecha($Fecha);
                array_push($arrayFavorito,$favorito);
            }

        } catch (Exception $e) {
            echo "Error al listar 1 itema de la lista de favoritos: " . $e->getMessage();
            $favorito = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $arrayFavorito;
    }

}

?>