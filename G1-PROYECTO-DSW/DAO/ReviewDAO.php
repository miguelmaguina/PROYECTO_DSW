<?php
if(file_exists("../Conexion/Conexion.php")){
    require_once "../Conexion/Conexion.php";
}else{
    require_once "../../Conexion/Conexion.php";
}

if(file_exists("../Clases/Review.php")){
    require_once "../Clases/Review.php";
}else{
    require_once "../../Clases/Review.php";
}


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
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);

        while (mysqli_stmt_fetch($stmt)) {
            $review = new Review();

            $review->setID_Review($ID_Review);
            $review->setID_Cliente($ID_Cliente);
            $review->setID_Producto($ID_Producto);
            $review->setEstado($Estado);
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

    $query = "INSERT INTO Review(ID_Review,ID_Cliente, ID_Producto,Estado, Comentario, Fecha) VALUES (?,?,?,?,?,?)";
    
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

        $ID_Review=$review->getID_Review(); //i
        $ID_Cliente=$review->getID_Cliente(); //i
        $ID_Producto=$review->getID_Producto(); //i
        $Estado=$review->getEstado(); //i
        $Comentario=$review->getComentario(); //s
        $Fecha=$review->getFecha(); //s

        mysqli_stmt_bind_param($stmt, "iiiiss", $ID_Review,$ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);
        mysqli_stmt_execute($stmt);
    } catch (Exception $e) {
        echo "Error al insertar review: " . $e->getMessage();
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
}

public function update(Review $review) {
    
    $query = "UPDATE Review SET ID_Cliente=?, ID_Producto=?, Estado=?,Comentario=?, Fecha=?  WHERE ID_Review=?";
    
    try {
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

        $ID_Cliente=$review->getID_Cliente(); //i
        $ID_Producto=$review->getID_Producto(); //i
        $Estado=$review->getEstado(); //i
        $Comentario=$review->getComentario(); //s
        $Fecha=$review->getFecha(); //s
        $ID_Review=$review->getID_Review(); //i

        mysqli_stmt_bind_param($stmt, "iiissi", $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha, $ID_Review);
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
        mysqli_stmt_bind_param($stmt, "i", $ID_Review);
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
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);

        if (mysqli_stmt_fetch($stmt)) {
            $review = new Review();

            $ID_Review=$review->getID_Review(); //i
            $ID_Cliente=$review->getID_Cliente(); //i
            $ID_Producto=$review->getID_Producto(); //i
            $Estado=$review->getEstado(); //i
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

public function listarAlgunasReviews(){
    $reviews = array();
    $query = "SELECT * FROM Review WHERE ID_Review In (4,11,20,29,33,59)";
    
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);

        while (mysqli_stmt_fetch($stmt)) {
            $review = new Review();

            $review->setID_Review($ID_Review);
            $review->setID_Cliente($ID_Cliente);
            $review->setID_Producto($ID_Producto);
            $review->setEstado($Estado);
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

public function listarReviewsxProducto($ID_Producto_Buscar){
    $reviews=array();
    $query = "SELECT * FROM Review WHERE ID_Producto=?";

    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_bind_param($stmt, "i", $ID_Producto_Buscar);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);

        while (mysqli_stmt_fetch($stmt)) {
            $review = new Review();
            
            $review->setID_Review($ID_Review);
            $review->setID_Cliente($ID_Cliente);
            $review->setID_Producto($ID_Producto);
            $review->setEstado($Estado);
            $review->setComentario($Comentario);          
            $review->setFecha($Fecha);
        
            $reviews[] = $review;
        }
        

    } catch (Exception $e) {
        echo "Error al listar la review " . $e->getMessage();
        $reviews = null;
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
    return $reviews;
}  

public function listarReviewsxCliente($ID_Cliente_a_buscar,$idProd){
    $reviews=array();
    $query = "SELECT * FROM Review WHERE ID_Cliente=? AND ID_Producto=?";

    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_bind_param($stmt, "ii", $ID_Cliente_a_buscar, $idProd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review, $ID_Cliente, $ID_Producto, $Estado, $Comentario, $Fecha);

        if (mysqli_stmt_fetch($stmt)) {
            $review = new Review();
            
            $review->setID_Review($ID_Review);
            $review->setID_Cliente($ID_Cliente);
            $review->setID_Producto($ID_Producto);
            $review->setEstado($Estado);
            $review->setComentario($Comentario);          
            $review->setFecha($Fecha);

            $reviews[] = $review;
        }

    } catch (Exception $e) {
        echo "Error al listar la review " . $e->getMessage();
        $reviews = null;
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
    return $reviews;
}  

public function getNroDeReviewsPendientes($ID_Producto){

    $nroDeReviewsPendientes_Aux;

    $query = "  SELECT COUNT(*) as nroDeReviewsPendientes
                FROM Review 
                INNER JOIN Producto ON Review.ID_Producto = Producto.ID_Producto
                WHERE Review.Estado = 2 AND Producto.ID_Producto = {$ID_Producto} 
                AND Producto.ID_Emprendimiento = {$_SESSION['id_e']}";

    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nroDeReviewsPendientes);

        if (mysqli_stmt_fetch($stmt)) {
            $nroDeReviewsPendientes_Aux = $nroDeReviewsPendientes;
        }

    } catch (Exception $e) {
        echo "Error al listar las reviews pendientes: " . $e->getMessage();
        $nroDeReviewsPendientes_Aux = null;
    } finally{
        if($stmt){
            mysqli_stmt_close($stmt);
        }
    }
    return $nroDeReviewsPendientes_Aux;
}

public function obtenerUltimoIdReview(){
    $r=0;//1 existe  0 no existe
    $sql = "SELECT MAX(ID_Review) FROM review";
    try{
        $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $ID_Review);

        if(mysqli_stmt_fetch($stmt)){
            $r=$ID_Review;
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