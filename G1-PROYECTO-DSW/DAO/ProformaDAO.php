<?php

//include "../Conexion/Conexion.php";
//include "../Clases/Proforma.php";

class ProformaDAO {
    //Atributos
    private $conexion;

    //Constructor
    public function __construct(){
        $this->conexion = new Conexion();
    }

    //Destructor (Se ejecutará al final del script)
    public function __destruct() {
        $this->conexion->close();
    }

    //CRUD
    public function listar(){
        $proformas = array();
        $query = "SELECT * FROM Proforma";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Proforma, $ID_Cliente, $ID_Producto, $Cantidad, $Fecha);

            while (mysqli_stmt_fetch($stmt)) {
                $proforma = new Proforma();

                $proforma->setId_Proforma($ID_Proforma);
                $proforma->setId_Cliente($ID_Cliente);
                $proforma->setId_Producto($ID_Producto);
                $proforma->setCantidad($Cantidad);          
                $proforma->setFecha($Fecha);

                $proformas[] = $proforma;
            }

        } catch (Exception $e) {
            echo "Error al listar las proformas: " . $e->getMessage();
            $proformas = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $proformas;
    }

    public function insert(Proforma $proforma){
        $r=0;
        $query = "INSERT INTO Proforma(ID_Cliente, ID_Producto, Cantidad, Fecha) VALUES (?,?,?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Carrito=$proforma->getIdCarrito(); //i
            $ID_Cliente=$proforma->getId_Cliente(); //i
            $ID_Producto=$proforma->getId_Producto(); //i
            $Cantidad=$proforma->getCantidad(); //i
            $Fecha=$proforma->getFecha(); //s

            mysqli_stmt_bind_param($stmt, "iiis", $ID_Cliente, $ID_Producto, $Cantidad, $Fecha);
            mysqli_stmt_execute($stmt);
            $r=1;
        } catch (Exception $e) {
            $r=0;
            echo "Error al insertar favorito: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $r;
    }

    public function update(Proforma $proforma) {
        
        $query = "UPDATE Proforma SET ID_Cliente=?, ID_Producto=?, Cantidad=?, Fecha=?  WHERE ID_Carrito=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $ID_Cliente=$proforma->getId_Cliente(); //i
            $ID_Producto=$proforma->getId_Producto(); //i
            $Cantidad=$proforma->getCantidad(); //i
            $Fecha=$proforma->getFecha(); //s

            $ID_Carrito=$proforma->getID_Proforma();//i
  
            mysqli_stmt_bind_param($stmt, "iiisi", $ID_Cliente, $ID_Producto, $Cantidad, $Fecha);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al actualizar la proforma: " . $e->getMessage();
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function delete($ID_Carrito) {
        $query = "DELETE FROM Proforma WHERE ID_Carrito=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Carrito);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar la proforma: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdProforma($ID_Proforma_Buscado){

        $query = "SELECT * FROM Proforma WHERE ID_Carrito=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Proforma_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Carrito, $ID_Cliente, $ID_Producto, $Cantidad, $Fecha);

            if (mysqli_stmt_fetch($stmt)) {
                $proforma = new Proforma();

                $ID_Carrito = $proforma->getID_Proforma(); //i
                $ID_Cliente=$proforma->getID_Cliente(); //s
                $ID_Producto=$proforma->getID_Producto(); //s
                $Cantidad=$proforma->getCantidad(); //s
                $Fecha=$proforma->getFecha(); //s

                
            }

        } catch (Exception $e) {
            echo "Error al listar la proforma " . $e->getMessage();
            $proforma = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $proforma;
    }
    
    public function listarPorIdCliente($idcliente){
        $query = "SELECT * FROM Proforma WHERE ID_Cliente=?";
        $arrayProforma=array();
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $idcliente);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Proforma, $ID_Cliente, $ID_Producto, $Cantidad, $Fecha);

            while(mysqli_stmt_fetch($stmt)) {
                $proforma = new Proforma();
                // $ID_Producto=$favorito->getId_Producto(); //i
                // $Fecha=$favorito->getFecha(); //s
                $proforma->setID_Proforma($ID_Proforma);
                $proforma->setID_Cliente($ID_Cliente);
                $proforma->setID_Producto($ID_Producto);
                $proforma->setCantidad($Cantidad);
                $proforma->setFecha($Fecha);
                array_push($arrayProforma,$proforma);
            }

        } catch (Exception $e) {
            echo "Error al listar 1 itema de la lista de proforma: " . $e->getMessage();
            $proforma = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $arrayProforma;
    }

}

?>