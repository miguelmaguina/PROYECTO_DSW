<?php

require_once "ProductoDAO.php";
$productosDAO = new ProductoDAO();

// Obtener el ID de la subcategoría recibido por POST
$ID_Subcategoria = $_POST['id'];

// Llamar a la función listarPorSubcategoria
$productos = $productoDAO->listarPorSubcategoria($ID_Subcategoria);

// Devolver los productos en formato JSON
header('Content-Type: application/json');
echo json_encode(array('productos' => $productos));
?>