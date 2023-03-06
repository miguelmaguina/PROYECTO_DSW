<?php

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/DAO/ReviewDAO.php';

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Review.php';


// Obtener los datos enviados por el formulario
$id_review = $_POST['id_review'];
$id_prod = $_POST['id_prod'];
$comentario = $_POST['comentario'];

echo $id_review;
echo $id_prod;
echo $comentario;


// Validar que el comentario no esté vacío
if (empty($comentario)) {
    // Si el comentario está vacío, redirigir a la página anterior con un mensaje de error
   // header("Location: ".$_SERVER['DOCUMENT_ROOT'] . "/PROYECTO_DSW/G1-PROYECTO-DSW/verProducto.php?id=$id_prod");
    //exit;
}

// Actualizar la base de datos

$review_dao = new ReviewDAO(); // Crear una instancia de la clase ReviewDAO
$review = new Review(); // Crear una instancia de la clase Review
$review->setID_Review($id_review); // Asignar el ID de la review
$review->setComentario($comentario); // Asignar el comentario
$review->setFecha(date('Y-m-d H:i:s')); // Asignar la fecha actual
$review_dao->update($review); // Llamar al método update de ReviewDAO para actualizar la review

// Redirigir a la página anterior con un mensaje de éxito
//header("Location: tienda1.php");
exit;
?>

?>