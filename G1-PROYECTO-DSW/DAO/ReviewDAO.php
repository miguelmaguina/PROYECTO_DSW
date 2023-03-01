<?php

include "../Conexion/Conexion.php";
include "../Clases/Review.php";

class ReviewDAO {
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
    $reviews = array();
    $query = "SELECT * FROM Review";
    
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Comentario, $Fecha);

        while (mysqli_stmt_fetch($stmt)) {
            $review = new Review();

            $review->setIdReview($ID_Review);
            $review->setIdCliente($ID_Cliente);
            $review->setIdProducto($ID_Producto);
            $review->setComentario($Comentario);          
            $review->setFecha($Fecha);

            $reviews[] = $review;
        }

    } catch (Exception $e) {
        echo "Error al listar las reviews: " . $e->getMessage();
        $reviews = null;
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
    return $reviews;
}

public function insert(Review $review){

    $query = "INSERT INTO Review(ID_Cliente, ID_Producto, Comentario, Fecha) VALUES (?,?,?,?)";
    
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

        //$ID_Review=$review->getIdReview(); //ai
        $ID_Cliente=$review->getIdCliente(); //s
        $ID_Producto=$review->getIdProducto(); //s
        $Comentario=$review->getComentario(); //s
        $Fecha=$review->getFecha(); //s

        mysqli_stmt_bind_param($stmt, "sssssssssssss", $ID_Cliente, $ID_Producto, $Comentario, $Fecha);
        mysqli_stmt_execute($stmt);
    } catch (Exception $e) {
        echo "Error al insertar favorito: " . $e->getMessage();
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
}

public function update(Review $review) {
    
    $query = "UPDATE Review SET ID_Cliente=?, ID_Producto=?, Comentario=?, Fecha=?  WHERE ID_Carrito=?";
    
    try {
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

        $ID_Cliente=$review->getIdCliente(); //s
        $ID_Producto=$review->getIdProducto(); //s
        $Comentario=$review->getComentario(); //s
        $Fecha=$review->getFecha(); //s

        mysqli_stmt_bind_param($stmt, "ssssssssssssss", $ID_Cliente, $ID_Producto, $Comentario, $Fecha);
        mysqli_stmt_execute($stmt);
    } catch (Exception $e) {
        echo "Error al actualizar la review: " . $e->getMessage();
    } finally {
        if ($stmt) {
            mysqli_stmt_close($stmt);
        }
    }
}

public function delete($ID_Review) {
    $query = "DELETE FROM Review WHERE ID_Review=?";
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_bind_param($stmt, "s", $ID_Review);
        mysqli_stmt_execute($stmt);
    } catch (Exception $e) {
        echo "Error al eliminar la review: " . $e->getMessage();
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
}

public function listarPorIdReview($ID_Review_Buscado){

    $query = "SELECT * FROM Review WHERE ID_Review=?";

    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_bind_param($stmt, "i", $ID_Review_Buscado);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Comentario, $Fecha);

        if (mysqli_stmt_fetch($stmt)) {
            $proforma = new Proforma();

            $ID_Review=$review->getIdReview(); //i
            $ID_Cliente=$review->getIdCliente(); //s
            $ID_Producto=$review->getIdProducto(); //s
            $Comentario=$review->getComentario(); //s
            $Fecha=$review->getFecha(); //s
        }

    } catch (Exception $e) {
        echo "Error al listar la review " . $e->getMessage();
        $review = null;
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
    return $review;
}        


}

?>