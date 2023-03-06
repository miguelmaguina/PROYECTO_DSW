<?php

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/DAO/ReviewDAO.php';

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Review.php';


if (isset($_POST['actualizar'])) {
    echo "dentro actualizar";
// Obtener los datos enviados por el formulario
$comentario = $_POST['comentario'];
$id_review = $_POST['id_review'];
$estadobase1 = $_POST['estadobase1'];
$id_prod = $_POST['id_prod'];
$id_cliente = $_POST['id_cliente'];;

echo $id_review."-".$id_cliente."-".$id_prod."-".$comentario."-".$estadobase1;

// Validar que el comentario no esté vacío
if (empty($comentario)) {
    header("Location: ../Index/Usuario/tienda1.php");    
}

// Actualizar la base de datos

$review_dao = new ReviewDAO(); // Crear una instancia de la clase ReviewDAO
$review = new Review(); // Crear una instancia de la clase Review
$review->setID_Review($id_review); // Asignar el ID de la review
$review->setID_Cliente($id_cliente);
$review->setID_Producto($id_prod);
$review->setEstado($estadobase1);
$review->setComentario($comentario); // Asignar el comentario
$review->setFecha(date('Y-m-d H:i:s')); // Asignar la fecha actual

$review_dao->update($review); // Llamar al método update de ReviewDAO para actualizar la review

//Redirigir a la página anterior con un mensaje de éxito
header("Location: ../Index/Usuario/tienda1.php");   
exit;
}
?>