<?php
session_start();
if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
require '../../Conexion/Conexion.php';
require '../../Clases/Lista_Favoritos.php';
require '../../DAO/Lista_FavoritosDAO.php';


$favoritoDAO=new Lista_FavoritosDAO();
$favorito=new Lista_Favoritos();
$favorito->setID_Cliente($_SESSION['id_c']);
$favorito->setID_Producto($codigo);
$favorito->setFecha(date('Y/m/d'));

if($favoritoDAO->verificaIdFavorito($codigo)==0){
    if($favoritoDAO->insert($favorito)==1){
        $_SESSION['mensaje_e']="Favorito agregado";
        header('Location: ../Usuario/tienda1.php');
    }else{
        $_SESSION['mensaje_d']="Hubo un error";
        header('Location: ../Usuario/tienda1.php');
    }
}else{
    $_SESSION['mensaje_d']="Ya ha sido agregado";
    header('Location: ../Usuario/tienda1.php');
}
    

?>