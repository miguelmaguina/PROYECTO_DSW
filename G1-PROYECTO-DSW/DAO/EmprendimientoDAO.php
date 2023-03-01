<?php

include "../Conexion/Conexion.php";
include "../Clases/Emprendimiento.php";

class EmprendimientoDAO {

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
        $emprendimientos = array();
        $query = "SELECT * FROM emprendimiento";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento, $Nombre, $Usuario, $Email, $Celular, $Contrasena, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros);

            while (mysqli_stmt_fetch($stmt)) {
                $emprendimiento = new Emprendimiento();
                $emprendimiento->setID_Emprendimiento($ID_Emprendimiento);
                $emprendimiento->setNombre($Nombre);
                $emprendimiento->setUsuario($Usuario);
                $emprendimiento->setEmail($Email);
                $emprendimiento->setCelular($Celular);
                $emprendimiento->setContrasena($Contrasena);
                $emprendimiento->setDepartamento($Departamento);
                $emprendimiento->setDireccion($Direccion);
                $emprendimiento->setLogo($Logo);
                $emprendimiento->setFecha_Creacion($Fecha_Creacion);
                $emprendimiento->setURL_Web($URL_Web);
                $emprendimiento->setURL_Facebook($URL_Facebook);
                $emprendimiento->setURL_Instagram($URL_Instagram);
                $emprendimiento->setURL_Otros($URL_Otros);
                $emprendimientos[] = $emprendimiento;
            }

        } catch (Exception $e) {
            echo "Error al listar emprendimientos: " . $e->getMessage();
            $emprendimientos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $emprendimientos;
    }

    /*
    Nota: El primero parametro de la funcion 'bind_param' requiere que se especifique el tipo de elemento que se le pasa.
        i: para variables de tipo entero
        d: para variables de tipo punto flotante
        s: para variables de tipo cadena (string)
        b: para variables de tipo blob
        ETC...
    */

    public function insert(Emprendimiento $emprendimiento){

        $query = "INSERT INTO Emprendimiento(Nombre, Usuario,email, Celular,Contrasena,Departamento,Direccion,Logo,Fecha_Creacion,URL_WEB,URL_Facebook,URL_Instagram,URL_Otros) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Emprendimiento = $emprendimiento->getID_Emprendimiento(); //i
            $Nombre = $emprendimiento->getNombre(); //s
            $Usuario = $emprendimiento->getUsuario(); //s
            $Email = $emprendimiento->getEmail(); //s
            $Celular = $emprendimiento->getCelular(); //s
            $Contrasena = $emprendimiento->getContrasena(); //s
            $Departamento = $emprendimiento->getDepartamento(); //s
            $Direccion = $emprendimiento->getDireccion(); //s
            $Logo = $emprendimiento->getLogo(); //s
            $Fecha_Creacion = $emprendimiento->getFecha_Creacion(); //s
            $URL_Web = $emprendimiento->getURL_Web(); //s
            $URL_Facebook = $emprendimiento->getURL_Facebook(); //s
            $URL_Instagram = $emprendimiento->getURL_Instagram(); //s
            $URL_Otros = $emprendimiento->getURL_Otros(); //s

            mysqli_stmt_bind_param($stmt, "sssssssssssss", $Nombre, $Usuario, $Email, $Celular, $Contrasena, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al insertar emprendimiento: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function update(Emprendimiento $emprendimiento) {
        
        $query = "UPDATE emprendimiento SET Nombre=?, Usuario=?, Email=?, Celular=?, Contrasena=?, Departamento=?, Direccion=?, Logo=?, Fecha_Creacion=?, URL_Web=?, URL_Facebook=?, URL_Instagram=?, URL_Otros=?  WHERE ID_Emprendimiento=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $Nombre = $emprendimiento->getNombre(); //s
            $Usuario = $emprendimiento->getUsuario(); //s
            $Email = $emprendimiento->getEmail(); //s
            $Celular = $emprendimiento->getCelular(); //s
            $Contrasena = $emprendimiento->getContrasena(); //s
            $Departamento = $emprendimiento->getDepartamento(); //s
            $Direccion = $emprendimiento->getDireccion(); //s
            $Logo = $emprendimiento->getLogo(); //s
            $Fecha_Creacion = $emprendimiento->getFecha_Creacion(); //s
            $URL_Web = $emprendimiento->getURL_Web(); //s
            $URL_Facebook = $emprendimiento->getURL_Facebook(); //s
            $URL_Instagram = $emprendimiento->getURL_Instagram(); //s
            $URL_Otros = $emprendimiento->getURL_Otros(); //s
            $ID_Emprendimiento = $emprendimiento->getID_Emprendimiento(); //i

            mysqli_stmt_bind_param($stmt, "sssssssssssssi", $Nombre, $Usuario, $Email, $Celular, $Contrasena, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros, $ID_Emprendimiento);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al actualizar emprendimiento: " . $e->getMessage();
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function delete($ID_Emprendimiento) {
        $query = "DELETE FROM Emprendimiento WHERE ID_Emprendimiento=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "s", $ID_Emprendimiento);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar emprendimiento: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdEmprendimiento($ID_Emprendimiento_Buscado){

        $query = "SELECT * FROM Emprendimiento WHERE ID_Emprendimiento=?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Emprendimiento_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento, $Nombre, $Usuario, $Email, $Celular, $Contrasena, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros);

            if (mysqli_stmt_fetch($stmt)) {
                $emprendimiento = new Emprendimiento();
                $ID_Emprendimiento = $emprendimiento->getID_Emprendimiento(); //i
                $Nombre = $emprendimiento->getNombre(); //s
                $Usuario = $emprendimiento->getUsuario(); //s
                $Email = $emprendimiento->getEmail(); //s
                $Celular = $emprendimiento->getCelular(); //s
                $Contrasena = $emprendimiento->getContrasena(); //s
                $Departamento = $emprendimiento->getDepartamento(); //s
                $Direccion = $emprendimiento->getDireccion(); //s
                $Logo = $emprendimiento->getLogo(); //s
                $Fecha_Creacion = $emprendimiento->getFecha_Creacion(); //s
                $URL_Web = $emprendimiento->getURL_Web(); //s
                $URL_Facebook = $emprendimiento->getURL_Facebook(); //s
                $URL_Instagram = $emprendimiento->getURL_Instagram(); //s
                $URL_Otros = $emprendimiento->getURL_Otros(); //s
            }

        } catch (Exception $e) {
            echo "Error al listar 1 emprendimiento: " . $e->getMessage();
            $emprendimiento = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $emprendimiento;
    }
    

}

?>