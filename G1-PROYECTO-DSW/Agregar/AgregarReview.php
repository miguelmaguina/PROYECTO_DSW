<?php

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Actualizar/ActualizarReview.php';

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Review.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si se envió el formulario por POST
  $idcliente = $_POST["idCliente"];
  $idproducto = $_POST["idProducto"]; // Lee el ID del producto enviado

  echo $idcliente;
  echo $idproducto;

  session_start();
  $cliente=$_SESSION['id_e'];
  //$fecha=date('Y/m/d');
  $reviewDAO1=new ReviewDAO();
  $idReviewCapturado=$reviewDAO1->obtenerUltimoIdReview()+1;

  $review = new Review(); // Crea un objeto Review

  $review->setID_Review($idReviewCapturado);
  $review->setID_Cliente($idcliente); // Setea el ID del cliente a partir de la sesión
  $review->setID_Producto($producto_id); // Setea el ID del producto a partir del formulario
  $review->setEstado(0); // Setea el estado a 0 (pendiente de revisión)
  $review->setComentario(""); // Setea el comentario a partir del formulario
  $review->setFecha(date("Y-m-d H:i:s")); // Setea la fecha actual

  $review_dao = new ReviewDAO(); // Crea un objeto ReviewDAO
  $review_dao->insert($review); // Llama al método crear para guardar la review en la base de datos
  
  echo ("Review registrada exitosamente");
  header("Location: tienda1.php"); // Redirige al usuario a la página de inicio
  exit();
}
?>













?>