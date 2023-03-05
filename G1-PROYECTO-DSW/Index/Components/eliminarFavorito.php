<?php

if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
require '../../Conexion/Conexion.php';
require '../../DAO/Lista_FavoritosDAO.php';

$favoritoDAO=new Lista_FavoritosDAO();

if($favoritoDAO->delete($codigo)==1){
    header('Location: ../Usuario/favorito.php');
}else{
    echo "Error";
}

?>