<?php

if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
require '../../Conexion/Conexion.php';
require '../../DAO/ProformaDAO.php';

$proformaDAO=new proformaDAO();

if($proformaDAO->delete($codigo)==1){
    header('Location: ../Usuario/proforma.php');
}else{
    echo "Error";
}

?>