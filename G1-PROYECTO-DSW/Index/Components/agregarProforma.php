<?php
session_start();
if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
$cantidad ='1'; //falta aqui pipippii     

require '../../Conexion/Conexion.php';
require '../../Clases/Proforma.php';
require '../../DAO/ProformaDAO.php';


$proformaDAO=new ProformaDAO();
$proforma=new Proforma();
$proforma->setID_Cliente($_SESSION['id_c']);
$proforma->setID_Producto($codigo);
$proforma->setCantidad($cantidad);
$proforma->setFecha(date('Y/m/d'));

if($proformaDAO->insert($proforma)==1){
    $_SESSION['mensaje']="Producto agregado";
    header('Location: ../Usuario/tienda1.php');
}else{
    echo "Error";
}




?>