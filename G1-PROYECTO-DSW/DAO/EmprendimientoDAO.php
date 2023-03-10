<?php

if(file_exists("../Conexion/Conexion.php")){
    require_once "../Conexion/Conexion.php";
}else{
    require_once "../../Conexion/Conexion.php";
}

if(file_exists("../Clases/Emprendimiento.php")){
    require_once "../Clases/Emprendimiento.php";
}else{
    require_once "../../Clases/Emprendimiento.php";
}

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
        
        $query = "UPDATE emprendimiento SET Nombre=?, Celular=?, Departamento=?, Direccion=?, Logo=?, Fecha_Creacion=?, URL_Web=?, URL_Facebook=?, URL_Instagram=?, URL_Otros=?  WHERE ID_Emprendimiento=?";
        
        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $Nombre = $emprendimiento->getNombre(); //s
            $Celular = $emprendimiento->getCelular(); //s
            $Departamento = $emprendimiento->getDepartamento(); //s
            $Direccion = $emprendimiento->getDireccion(); //s
            $Logo = $emprendimiento->getLogo(); //s
            $Fecha_Creacion = $emprendimiento->getFecha_Creacion(); //s
            $URL_Web = $emprendimiento->getURL_Web(); //s
            $URL_Facebook = $emprendimiento->getURL_Facebook(); //s
            $URL_Instagram = $emprendimiento->getURL_Instagram(); //s
            $URL_Otros = $emprendimiento->getURL_Otros(); //s
            $ID_Emprendimiento = $emprendimiento->getID_Emprendimiento(); //i

            mysqli_stmt_bind_param($stmt, "ssssssssssi", $Nombre, $Celular, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros, $ID_Emprendimiento);
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
        $emprendimiento=null;
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Emprendimiento_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento, $Nombre, $Usuario, $Email, $Celular, $Contrasena, $Departamento, $Direccion, $Logo, $Fecha_Creacion, $URL_Web, $URL_Facebook, $URL_Instagram, $URL_Otros);

            if (mysqli_stmt_fetch($stmt)) {
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
    
    public function verificaUsuario($user){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT Usuario FROM emprendimiento WHERE usuario=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Usuario);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Cliente'];
                $r=1;
            }

            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

    public function verificaEmail($emai){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT Usuario FROM emprendimiento WHERE email=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "s", $emai);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Usuario);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Cliente'];
                $r=1;
            }

            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

    public function verificaLogin($email,$contra){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT ID_Emprendimiento, Nombre, Usuario, Logo FROM emprendimiento WHERE Email=? AND Contrasena=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "ss", $email, $contra);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento, $Nombre, $Usuario, $Logo);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Emp$ID_Emprendimiento'];
                //echo "el id es:".$ID_Emprendimiento." ";
                $_SESSION['id_e'] = $ID_Emprendimiento;
                $_SESSION['nombre_e'] = $Nombre;
                $_SESSION['usuario_e'] = $Usuario;
                $_SESSION['foto_e'] = $Logo;
                $_SESSION['tipo_usuario'] = 'emprendimiento';
                $r=1;
            }// }else{
            //     echo "No hay";
            // }

            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

    public function verificaLoginEncriptado($email, $contrasena_enviada){
        $r=0; //1 existe  0 no existe
        $sql = "SELECT ID_Emprendimiento, Nombre, Usuario, Logo, Contrasena FROM Emprendimiento WHERE email = ?";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento, $Nombre, $Usuario, $Logo, $contrasena_hash);

            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($contrasena_enviada, $contrasena_hash)){
                    $r = 1;
                    $_SESSION['id_e'] = $ID_Emprendimiento;
                    $_SESSION['nombre_e'] = $Nombre;
                    $_SESSION['usuario_e'] = $Usuario;
                    $_SESSION['foto_e'] = $Logo;
                    $_SESSION['tipo_usuario'] = 'emprendimiento';
                }else{
                    $r = 0;
                }
            } else{
                $r = 0;
            }      
        }catch(Exception $e){
            echo $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $r;  
    }

    public function obtenerUltimoId(){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT MAX(ID_Emprendimiento) FROM emprendimiento";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Emprendimiento);

            if(mysqli_stmt_fetch($stmt)){
                $r=$ID_Emprendimiento;
            }

            
        }catch(Exception $e){
            echo $e->getMessage();
            echo "Error al obtener MaxID: " . $e->getMessage();
            $r = 0;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        
        return $r;
    }

}

?>