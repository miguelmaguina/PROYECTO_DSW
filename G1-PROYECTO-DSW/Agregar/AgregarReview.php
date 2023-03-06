<?php

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Actualizar/ActualizarReview.php';

require_once 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Clases/Review.php';
//estado 2 -> review estado base / el cliente presiona en contactar y emprendimiento recibe esta info
//estado 0 -> review aceptada para dejar comentario / el emprendimiento cambia a este estado cuando acepta que el cliente puede dejar review
//estado 1 -> review actualizada con el comentario del cliente usuario

if (isset($_POST['añadir'])) {
  echo "dentro añadir";
  $id_review_añadir = $_POST["id_review_añadir"];
  $id_prod_añadir = $_POST["id_prod_añadir"];
  $id_cliente_añadir = $_POST["id_cliente_añadir"]; 

  $estadobase2 = $_POST["estadobase2"];
  $comentariobase = $_POST["comentariobase"];
  $fechahoy = $_POST["fechahoy"];
  
 

  echo $id_review_añadir."-".$id_prod_añadir."-".$id_cliente_añadir."-".$estadobase2."-".$comentariobase."-".$fechahoy;

  $reviewDAO1=new ReviewDAO();
  $idReviewCapturado=$reviewDAO1->obtenerUltimoIdReview()+1;

  $review = new Review(); // Crea un objeto Review

  $review->setID_Review($id_review_añadir);
  $review->setID_Cliente($id_cliente_añadir); // Setea el ID del cliente a partir de la sesión
  $review->setID_Producto($id_prod_añadir); // Setea el ID del producto a partir del formulario
  $review->setEstado($estadobase2); // Setea el estado a 0 (pendiente de revisión)
  $review->setComentario("Review no disponible."); // Setea el comentario a partir del formulario
  $review->setFecha($fechahoy); // Setea la fecha actual

  $review_dao = new ReviewDAO(); // Crea un objeto ReviewDAO
  $review_dao->insert($review); // Llama al método crear para guardar la review en la base de datos
  
  echo ("Review registrada exitosamente");
  header("Location: ../Index/Usuario/tienda1.php");   

  exit();
}
?>