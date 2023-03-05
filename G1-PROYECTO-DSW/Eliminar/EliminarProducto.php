<?php
require_once "../DAO/ProductoDAO.php";
require_once "../Conexion/Conexion.php";

    if (isset($_POST['delete'])) {
        
        $ProductoDAO = new ProductoDAO();

        $ID_Producto = $_POST['ID_Producto_Aux'];
        

        // 
        $ProductoDAO->delete($ID_Producto);
        header("Location: ../Index/Empresa/verProductoEmp2.php");
        exit();
    }
    echo $ID_Producto ."hola"; 
?>



